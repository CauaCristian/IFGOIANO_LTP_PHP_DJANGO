from django.shortcuts import render
from django.http import HttpResponse
import math
def home(request):  
    return render(request, 'pagina.html')
def result(request):

    a = float(request.POST.get('ax2'))
    b = float(request.POST.get('bx'))
    c = float(request.POST.get('c'))

    delta = (b * b) - (4 * a * c)
    raiz = delta**0.5
    if delta < 0:
        return HttpResponse('Não existe resultado, delta é menor do que 0')
    if delta == 0:
        x0 = -(b) // 2 * a
        return render(request, 'ip.html')
    else:
        x1 = float()
        x2 = float()
        x1 = (- (b) + raiz) // 2*a
        x2 = (- (b) - raiz) // 2*a
        return HttpResponse(f'Com os valores dados o X1 = {x1:.2f} X2 = {x2:.2f}')
