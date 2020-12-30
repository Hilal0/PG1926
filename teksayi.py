adet = int(input("Kac sayi girilecek: "))
sayi = []

for i in range(adet):
    sayi.append(input())

sayi.sort(reverse=True)
print(sayi)

for s in range(len(sayi)):
    if s % 2 != 0:
        print(s, end=" ")
    else:
        print("")
s+= 1
print("En buyuk tek sayi:",max(sayi))
