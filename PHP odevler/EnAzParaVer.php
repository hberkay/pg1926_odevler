<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>EnAzPara</title>
	</head>
	<body>
    <form>
            <label>TL degeri giriniz(yoksa 0 yazınız)   :</label><br><br>
            <input type="number" id="fname" name="lira" value="TL degeri giriniz(yoksa 0 yazınız)"><br><br>
            <label>Kurus degeri giriniz(yoksa 0 yazınız)   :</label><br><br>
            <input type="number" id="fname" name="kurus" value="Kurus degeri giriniz(yoksa 0 yazınız)"><br><br>
            <input type="submit" value="Devam Et">
        </form><br>
        <?php
            $lira = $_GET["lira"];
            $kurus = $_GET["kurus"];
            $prlira = 0;
            $prelli = 0;
            $pryirmibes = 0;
            $pron = 0;
            $prbes = 0;
            $prbir = 0;
            $lira = ($lira*100)+$kurus;
                if ($lira>=100){
                    for($i=100;$lira>100;$lira=$lira-100){
                        $prlira=$prlira+1;
                    }
                    echo $prlira." Adet 1 Lira"."<br>";
                }
                if ($lira>=50 AND $lira<100){
                    for($i=50;$lira>50;$lira=$lira-50){
                        $prelli=$prelli+1;
                    }
                    echo $prelli.' Adet 50 Kurus'."<br>";
                }
                if ($lira>=25 AND $lira<50){
                    for($i=25;$lira>25;$lira=$lira-25){
                        $pryirmibes=$pryirmibes+1;
                    }
                    echo $pryirmibes.'  Adet 25 Kurus'."<br>";
                }
                if ($lira>=10 AND $lira<25){
                    for($i=10;$lira>10;$lira=$lira-10){
                        $pron=$pron+1;
                    }
                    echo $pron.' Adet 10 Kurus'."<br>";
                }
                if ($lira>=5 AND $lira<10){
                    for($i=5;$lira>5;$lira=$lira-5){
                        $prbes=$prbes+1;
                    }
                    echo $prbes.' Adet 5 Kurus'."<br>";
                }
                if ($lira>=1 AND $lira<5){
                    for($i=1;$lira>=1;$lira=$lira-1){
                        $prbir=$prbir+1;
                    }
                    echo $prbir.' Adet 1 Kurus'."<br>";
                }


        ?>
	</body>
</html>