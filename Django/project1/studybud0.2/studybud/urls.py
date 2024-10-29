
from django.contrib import admin
from django.urls import path, include
from django.conf import settings
from django.conf.urls.static import static


urlpatterns = [
    path('admin/', admin.site.urls),
    path('', include('base.urls')),
    path('api/', include('base.api.urls') ) #any url that starts with an api send them to the api.urls file
]


#we are setting a url and the file path is gonna be MEDIA_URL from settings.py so we are telling it set the url
#and get the file from MEDIA_ROOT
urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
