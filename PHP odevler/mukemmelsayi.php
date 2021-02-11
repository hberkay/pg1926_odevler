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
            <input type="submit" value="Sayi mukemmel mi test et">
        </form><br>
        <?php
            $sayi = $_GET["sayi"];
            $toplam=0;
                for($i=1;$i<=($sayi/2);$i++){
                    if ($sayi%$i==0){
                        $toplam=$toplam+$i;
                    }
                }
            if ($toplam==$sayi){
                echo "Bu sayi mukemmel sayidir :)";}
            else{
                echo "Bu sayi mukemmel sayi degildir :(";}



        ?>
	</body>
</html>