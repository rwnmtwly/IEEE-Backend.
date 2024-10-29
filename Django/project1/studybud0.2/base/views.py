from django.shortcuts import render, redirect
from django.http import HttpResponse
from django.contrib import messages
from django.contrib.auth.decorators import login_required
from django.db.models import Q
from django.contrib.auth import authenticate, login, logout
from .models import Room, Topic, Message, User
from .forms import RoomForm, UserForm, MyUserCreationForm




# Create your views here.

# rooms = [
#     {'id': 1, 'name': "Let's learn python"},
#     {'id': 2, 'name': "Design With Me"},
#     {'id': 3, 'name': "Frontend developers"},
# ]

def loginPage(request):

    page = 'login'

    #logged in users can't go to login page
    if request.user.is_authenticated:
        return redirect('home')

    #1. we get the user name and password
    if request.method == 'POST':
        email = request.POST.get('email').lower()
        password = request.POST.get('password')
        
        #2. we check if the user exists
        try:
            user = User.objects.get(email=email)
        except:
            messages.error(request,'User Does Not Exist')
        
        #3. if the user exists, we make sure that the credentials are correct. We get the user object based on the user name and password
        user = authenticate(request, email=email, password=password)

        #4. we log the user in, this creates a session in the browser and then we redirect the user
        if user is not None:
            login(request, user)
            return redirect('home')
        #5. if the user is not logged in
        else:
            messages.error(request, 'Username or Password Does Not Exist')
    context={'page':page}
    return render(request, 'base/login_register.html', context)
#-------------------------------------------------------------------------------------


def logoutUser(request):
    logout(request)
    return redirect('home')
#-------------------------------------------------------------------------------------


def registerPage(request):
    form = MyUserCreationForm()
    # we pass in the user data
    if request.method == 'POST':
        #2. we throw that into the user creation form
        form = MyUserCreationForm(request.POST)
        #3. we check if the form is valid
        if form.is_valid():
            #4. if it is:
            user = form.save(commit=False)
            #5. we get the user name and make sure it's lowercase
            user.username = user.username.lower()
            #6. we save the user 
            user.save()
            #7. we log the user in
            login(request, user)
            #8. then we sen the user to the home page
            return redirect('home')
        else:
            messages.error(request, 'An Error Occurred During Registeration')
    return render(request, 'base/login_register.html', {'form': form})
#-------------------------------------------------------------------------------------


def home(request):
    # whatever value we have in the topic name at least contains what is in here
    q = request.GET.get('q') if request.GET.get('q') != None else ''

    #filter() works just like the all() method because if i didn't add any parameters
    #so it's going to get back all the rooms

    #Q allows us to add &, or statements to the filtering so that we can serach using multiple things not just the topic
    rooms = Room.objects.filter(
        Q(topic__name__icontains=q) |
        Q(name__icontains=q) |
        Q(description__icontains=q)
                                ) #i means that we can make it case insensitive

    topics = Topic.objects.all()[0:5]
    #this count method is faster than the len() method, which could also be used here
    room_count = rooms.count()
    room_messages = Message.objects.filter(Q(room__topic__name__icontains=q))

    context = {'rooms': rooms, 'topics': topics, 'room_count': room_count, 'room_messages': room_messages}
    return render(request,'base/home.html', context)
#-------------------------------------------------------------------------------------


def room(request, pk):
    room = Room.objects.get(id=pk)
    room_messages = room.message_set.all()
    participants = room.participants.all()

    if request.method == 'POST':
        message = Message.objects.create(
            user = request.user,
            room = room,
            body = request.POST.get('body')
        )
        room.participants.add(request.user)
        return redirect('room', pk=room.id)


    context = {'room': room, 'room_messages': room_messages, 'participants': participants}
    return render(request, 'base/room.html', context) 
#-------------------------------------------------------------------------------------


def userProfile(request, pk):
    user = User.objects.get(id=pk)
    rooms = user.room_set.all()
    room_messages = user.message_set.all()
    topics = Topic.objects.all()
    context = {'user': user, 'rooms': rooms, 'room_messages':room_messages, 'topics': topics}
    return render(request, 'base/profile.html', context)


#CRUD
@login_required(login_url='login')
def createRoom(request):
    form = RoomForm()
    topics = Topic.objects.all()
    #sending the post data
    if request.method == 'POST':
        topic_name = request.POST.get('topic')
        topic, created = Topic.objects.get_or_create(name=topic_name)
        #adding the data to the form

        Room.objects.create(
            host = request.user,
            topic = topic,
            name = request.POST.get('name'),
            description = request.POST.get('description'),
        )
        return redirect('home')
        #form = RoomForm(request.POST)
        #check if it's valid
        #if form.is_valid():
            #save and redirect to home
            # room = form.save(commit=False)  #this gives us an instance of this room
            # room.host = request.user #this is to add the host based on who will me logged in
            # room.save()
    context= {'form': form, 'topics': topics}
    return render(request, 'base/room_form.html' ,context)
#-------------------------------


@login_required(login_url='login')
def updateRoom(request, pk):
    room = Room.objects.get(id=pk)
    #this form will be prefilled with this room value
    form = RoomForm(instance=room)

    topics = Topic.objects.all()

    if request.user != room.host:
        return HttpResponse('You Are Not Allowed Here')

    if request.method == 'POST':
        topic_name = request.POST.get('topic')
        topic, created = Topic.objects.get_or_create(name=topic_name)
        room.name = request.POST.get('name')
        room.topic = topic
        room.description = request.POST.get('description')
        room.save()
        return redirect('home')
        # form = RoomForm(request.POST, instance=room)
        # if form.is_valid():
        #     form.save()
    context = {'form': form, 'topics': topics, 'room': room}
    return render(request, 'base/room_form.html',context)
#-------------------------------


@login_required(login_url='login')
def deleteRoom(request, pk):
    room = Room.objects.get(id=pk)

    if request.user != room.host:
        return HttpResponse('You Are Not Allowed Here')
    
    if request.method == 'POST':
        room.delete()
        return redirect('home')
    return render(request, 'base/delete.html', {'obj': room})
#-------------------------------------------------------------------------------------




@login_required(login_url='login')
def deleteMessage(request, pk):
    message = Message.objects.get(id=pk)

    if request.user != message.user:
        return HttpResponse('You Are Not Allowed Here!')
    
    if request.method == 'POST':
        message.delete()
        return redirect('home')
    return render(request,'base/delete.html', {'obj': message})
#-------------------------------------------------------------------------------------


@login_required(login_url='login')
def updateUser(request): 
    user = request.user
    form = UserForm(instance=user)

    if request.method=='POST':
        form = UserForm(request.POST, request.FILES, instance=user)
        if form.is_valid():
            form.save()
            return redirect('user-profile', pk=user.id)

    return render(request , 'base/update-user.html', {'form':form})
#--------------------------------------------------------------------------------------



def topicsPage(request):
    q = request.GET.get('q') if request.GET.get('q') != None else ''
    topics = Topic.objects.filter(name__icontains=q)
    return render(request ,'base/topics.html', {'topics':topics})
#--------------------------------------------------------------------------------------


def activityPage(request):
    room_messages = Message.objects.all()
    return render(request, 'base/activity.html', {'room_messages':room_messages})


