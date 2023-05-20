from django.contrib import admin
from django.urls import path, include
from . import views


urlpatterns = [
    path('calculadora/',views.calculadora,name="calculadora" ),
    path('resultado/',views.resultado,name="resultado"),
    
]
