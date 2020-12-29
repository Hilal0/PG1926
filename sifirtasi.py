#sifiri basa tasima
from operator import itemgetter

def sayisiralama(liste):
    for i in range(len(liste)):
        for j in range(len(liste) - i -1):
            if liste[j] > liste[j+1]:
                liste[j], liste[j + 1] = liste[j + 1],liste[j]

adet = int(input("Kac sayi girilecek: "))
liste = []

for i in range(adet):
    liste.append(input())

sayisiralama(liste)

liste.sort(key=itemgetter(0))
print(liste)








