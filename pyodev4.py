x = int(0)
i = int(0)
y = int(0)
liste=[]
yeniliste=[]
x=int(input("Kac Sayi Girmek İstiyorsunuz :"))
while i<x:
    i=i+1
    y=int(input(str(i)+". Sayiyi Giriniz  :"))
    liste.append(y)
for i in liste:
    if i%2 != 0:
        yeniliste.append(i)
yeniliste.sort(reverse=True)
print(yeniliste[0])



