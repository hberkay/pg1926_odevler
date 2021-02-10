class hayalimdekiokul:
    def __init__(self,OkulAdi,OkulTuru,OkulKonumu,OkulImkanlari,SinifMevcudu):
        self.OkulAdi = OkulAdi
        self.OkulTuru = OkulTuru
        self.OkulKonumu = OkulKonumu
        self.OkulImkanlari = OkulImkanlari
        self.SinifMevcudu = SinifMevcudu
okulA = hayalimdekiokul("Ufuktepe Ilkokulu--","Ilkokul-","Ankara--","Futbol Sahasi-----------------------------------",30)
okulB = hayalimdekiokul("Ayyıldız Lisesi----","Lise----","Ankara--","Futbol Sahasi-Basketbol Sahası-Voleybol Sahasi--",25)
okulC = hayalimdekiokul("Biltem Lisesi------","Lise----","Ankara--","Voleybol Sahasi-Futbol Sahasi-------------------",15)
okullar=[okulA,okulB,okulC]
print("Okul Adi    //       Turu   / / Konumu   //          İmkanları          //            Mevcudu")
for hayalimdekiokul in okullar:
    print(hayalimdekiokul.OkulAdi,hayalimdekiokul.OkulTuru,hayalimdekiokul.OkulKonumu,hayalimdekiokul.OkulImkanlari,hayalimdekiokul.SinifMevcudu)