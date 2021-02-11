<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>MukemmelSayi</title>
	</head>
	<body>
    <form>
            <label>Bir sayı gir   :</label><br><br>
            <input type="number" id="fname" name="sayi" value="Bir Sayı Giriniz"><br><br>
            <input type="submit" value="Sayi Asal Mı Test Et">
        </form><br>
        <?php
            $sayi = 0;
            $sayi = $_GET["sayi"];
            $kontrol=0;
                for($i=2;$i<$sayi;$i++){
                    if ($sayi%$i==0){
                        $kontrol=$kontrol+1;
                    }
                }
        if ($sayi!=0){
            if ($kontrol==0){
                echo "Bu sayi Asaldir :)";}
            else{
                echo "Bu sayi Asal Degildir :(";}
            }
        else{
            echo "Sayi Giriniz";
        }


        ?>
	</body>
</html>