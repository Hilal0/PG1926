liste=[]
sayi = int(input("Kaç sayı girilecek:"))
for n in range(sayi):
    sayi=int(input("{}. sayıyı girin :". format(n+1)))
    if sayi not  in liste :
        if sayi%2!=0:
            liste.append(sayi)
        else:
            pass

print("Listedeki en büyük tek sayı:", max(liste))
