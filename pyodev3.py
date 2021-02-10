liste=[]
yeniliste=[]
i=int(0)
x=int(0)
y=int(0)
x=int(input("Kaç Sayi Girmek İstiyorsunuz   :"))
while i<x:
    i=i+1
    y=int(input(str(i)+".Sayiyi Girin:"))
    liste.append(y)
i=int(0)
y=int(0)
for i in liste:
    if i==0:
        yeniliste.append(i)
    y=y+1
    if y==x:
        i=0
        for i in liste:
            if i!=0:
                yeniliste.append(i)
print(yeniliste)