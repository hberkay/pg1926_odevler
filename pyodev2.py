sayac=int(0)
def dogrula(x,adres):
    global sayac
    if x<4:
        for i in adres:
            if i=='@':
                sayac=sayac+1
        if sayac == 1:
            print("Girdiginiz Mail Dogru!!!")
        if sayac == 0:
            print("Girdiginiz Mail Yanlis  (*@* ekleyin!)")
        if sayac > 1:
            print("Girdiginiz Mail Yanlis  (*@* silin!)")
    if x>3:
        print("Uzantı Uzunlugu Yanlis!!!")



y=str
i=int(input("Uzantı Uzunlugunu Giriniz    :"))
y=str(input("Mail adresini giriniz        :"))
dogrula(i,y)
