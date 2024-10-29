from django.db import models

from django.contrib.auth.models import AbstractUser 

# Create your models here.


class User (AbstractUser):
    name = models.CharField(max_length=200, null=True)
    email = models.EmailField(unique=True)
    bio = models.TextField(null=True)

    #to make the user name field the email instead of the user name:
    USERNAME_FIELD = 'email'
    REQUIRED_FIELDS = []