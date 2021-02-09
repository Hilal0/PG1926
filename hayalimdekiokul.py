class Okul():
    def __init__(self, isim, tur):
        self.isim = isim
        self.tur = tur

    def bilgilerigoster(self):
        print("isim : {} \n türü : {}\n".format(self.isim, self.tur))


class Personel():
    def __init__(self, ad, soyad, maas):
        self.ad = ad
        self.soyad = soyad
        self.maas = maas

    def bilgilerigoster(self):
        print("adı: {}\t soyadı : {} \n maaşı : {}\n".format(self.ad, self.soyad, self.maas))

    def maas_artir(self, yenimaas):
        self.maas += yenimaas
        print("Çalışanın yeni maaşı : {}\n".format(self.maas))


class Ogretmen(Personel):
    def __init__(self, ad, soyad, maas, brans):
        self.ad = ad
        self.soyad = soyad
        self.maas = maas
        self.brans = brans


    def bilgilerigoster(self):
        print("Öğretmenin bilgileri")
        print("Adı: {} Soyadı : {} \n Maaşı : {}\n Branşı : {}\n".format(self.ad, self.soyad, self.maas, self.brans))

    def maas_artir(self, yenimaas):
        self.maas += yenimaas
        print("Çalışanın yeni maaşı : {}\n".format(self.maas))

class Akademisyen(Personel):
    def __init__(self, ad, soyad, maas, unvan):
        self.ad = ad
        self.soyad = soyad
        self.maas = maas
        self.unvan = unvan

    def bilgilerigoster(self):
        print("Akademisyenin bilgileri")
        print("Adı: {} Soyadı : {} \n Maaşı : {}\n Branşı : {}\n".format(self.ad, self.soyad, self.maas, self.unvan))

    def maas_artir(self, yenimaas):
        self.maas += yenimaas
        print("Çalışanın yeni maaşı : {}\n".format(self.maas))

class Ilkokul(Okul):
    def __init__(self, isim, tur, ogrenci_sayisi):
        self.isim = isim
        self.tur = tur
        self.ogrenci_sayisi = ogrenci_sayisi

    def bilgilerigoster(self):
        print("İsmi : {} \nTürü : {}\nÖğrenci sayısı : {}\n".format(self.isim, self.tur, self.ogrenci_sayisi))

    def ogrenci_ekle(self, eklenen_ogrenci):
        self.ogrenci_sayisi += eklenen_ogrenci
        print("Eklenen öğrenci ile birlikte yeni öğrenci sayısı : {}\n ".format(self.ogrenci_sayisi))


class Lise(Okul):
    def __init__(self, isim, tur, ogrenci_sayisi):
        self.isim = isim
        self.tur = tur
        self.ogrenci_sayisi = ogrenci_sayisi

    def bilgilerigoster(self):
        print("İsmi : {} \nTürü : {}\nÖğrenci sayısı : {}\n".format(self.isim, self.tur, self.ogrenci_sayisi))

    def ogrenci_ekle(self, eklenen_ogrenci):
        self.ogrenci_sayisi += eklenen_ogrenci
        print("Eklenen öğrenci ile birlikte yeni öğrenci sayısı : {}\n ".format(self.ogrenci_sayisi))


class Universite(Okul):
    def __init__(self, isim, tur, ogrenci_sayisi):
        self.isim = isim
        self.tur = tur
        self.ogrenci_sayisi = ogrenci_sayisi

    def bilgilerigoster(self):
        print("İsmi : {} \nTürü : {}\nÖğrenci sayısı : {}\n".format(self.isim, self.tur, self.ogrenci_sayisi))

    def ogrenci_ekle(self, eklenen_ogrenci):
        self.ogrenci_sayisi += eklenen_ogrenci
        print("Eklenen öğrenci ile birlikte yeni öğrenci sayısı : {}\n ".format(self.ogrenci_sayisi))

ogretmen = Ogretmen(ad="Taner", soyad="Yılmaz", maas=4000, brans="Fizik")
akademisyen = Akademisyen(ad="İlber", soyad="Fırat", maas=10000, unvan="Profesör")
ilkokul = Ilkokul(isim="100.Yıl İ.Ö.O.", tur="Ilkokul", ogrenci_sayisi=450)
lise = Lise(isim="Dr.İlhami Tankut Anadolu Lisesi", tur="Lise", ogrenci_sayisi=400)
universite = Universite(isim="Uludağ Universitesi", tur="Universite", ogrenci_sayisi=70000)
ogretmen.maas_artir(1000)
ogretmen.bilgilerigoster()
akademisyen.maas_artir(2350)
akademisyen.bilgilerigoster()
ilkokul.ogrenci_ekle(35)
ilkokul.bilgilerigoster()
lise.ogrenci_ekle(95)
lise.bilgilerigoster()
universite.ogrenci_ekle(100)
universite.bilgilerigoster()
