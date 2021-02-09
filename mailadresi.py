
import re

x=int(input("Uzantı uzunluğunu giriniz:\n(Uzantı uzunluğu @ işaretinden sonraki uzunluktur)\n "))
if(x<4) and (x>0):
    print("Uzantı uzunluğunu doğru girdiniz\n")
else:
    print("Uzantı uzunluğunu yanlış girdiniz.\n")

mail=input("Mail adresinizi giriniz: \n")

def dogrula(mail):
    kosullar=[False,False,False,False,False]
    if re.search("[@]",mail) is not None:
        kosullar[4]=True
    else:
        pass
    at="[@,.]"
    temp=re.split(at,mail)
    if len(temp)!= 4:
        return False
    else:
        pass
    # kullanıcıAdı
    if re.search("[a-zA-Z0-9_-]" ,temp[0]) is not None:
        kosullar[0]=True
        print("Kullanıcı adını doğru girdiniz\n")
    else:
        pass
    # websiteSağlayıcı
    if re.search("[a-zA-Z0-9]",temp[1]) is not None:
        kosullar[1]=True
        print("Website sağlayıcısını doğru girdiniz\n")
    else:
        pass
    # siteUzantısı
    global x
    uz="^[a-zA-Z]{{{}}}$".format(x)
    if re.search(uz,temp[2]) is not None:
        kosullar[2]=True
        print("Site uzantısını doğru girdiniz\n")
    else:
        pass
    # ülkeKodu
    if re.search("^[a-zA-Z]{2,4}$",temp[3]) is not None:
        kosullar[3]=True
        print("Ülke kodunu doğru girdiniz\n")
    else:
        pass
    # Tüm şartlar sağlanıyor mu?
    if kosullar[0]==True and kosullar[1]==True and kosullar[2]==True and kosullar[3]==True and kosullar[4]==True:
        return True
    else:
        return False

dogrula(mail)
if dogrula(mail) == True:
    print("Mail Adresiniz Uygundur")
else:
    print("Mail Adresiniz Uygun Değildir")