from django.db import models
from django.contrib.auth.models import AbstractUser
# Create your models here.


class User(AbstractUser):
    name = models.CharField(max_length=200, null=True)
    email = models.EmailField(unique=True, null=True)
    bio = models.TextField(null=True)

    avatar = models.ImageField(null=True, default="avatar.svg")

    USERNAME_FIELD = 'email'
    REQUIRED_FIELDS = []

class Topic(models.Model):
    name = models.CharField(max_length=200)

    def __str__(self):
        return self.name


class Room(models.Model):
    host = models.ForeignKey(User, on_delete=models.SET_NULL, null=True) #user->parent, room->child
    topic = models.ForeignKey(Topic, on_delete=models.SET_NULL, null=True) #topic->parent, room->child
    #we have to add null=True for the database to allow this field to be empty
    name = models.CharField(max_length=200)
    description = models.TextField(null=True, blank=True) 
    # null  = true : this means that is field can be blank
    # blank = true : This is for the save method for when adding a form


    participants = models.ManyToManyField(User, related_name='participants', blank=True)


    updated = models.DateTimeField(auto_now=True) #this takes a snapshot of any time this model instance was updated
    #this code means that every time the save method is called go ahead and take a timestamp
    created = models.DateTimeField(auto_now_add=True) #this takes a snapshot/timestamp of the time this model instance was created
    #ordering newest updated item 1st
    class Meta:
        ordering = ['-updated', '-created']

    def __str__(self):
        return self.name
    

class Message(models.Model):
    user = models.ForeignKey(User, on_delete=models.CASCADE)
    room = models.ForeignKey(Room, on_delete=models.CASCADE)
    body = models.TextField()
    updated = models.DateTimeField(auto_now=True)
    created = models.DateTimeField(auto_now_add=True)


    class Meta:
        ordering = ['-updated', '-created']

    def __str__(self):
        return self.body[0:50] #in the preview we want the first 50 characters




#notes to self:
#----------------------------------------------------------------------
#user tim's password is python1234