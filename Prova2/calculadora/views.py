from django.shortcuts import render
from django.http import HttpResponse
from . import templates


def calculadora(request):
    return render(request,"site/calculadora.html/")


def resultado(request):
    if request.method=='GET':
        return render(request, "site/index.html/")
    
    else:
      MASSA = float(request.POST.get('MASSA'))
      ALTURA = float(request.POST.get('ALTURA'))
     
      imc = MASSA / ALTURA**2
    
    if imc < 18:
        return HttpResponse('magreza')
     
    elif imc > 18.5 and imc < 24.5:
        return HttpResponse('normal')
    
    elif imc > 24.5 and imc < 30:
        return HttpResponse('sobrepeso')
    elif imc > 30 and imc < 35:
        return HttpResponse('obesidade classe 1')
    
    elif imc >35 and imc < 40:
         return HttpResponse('obesidade classe 2')

    elif imc >= 40:
        return HttpResponse('considerado classe 3')
    
      
   

