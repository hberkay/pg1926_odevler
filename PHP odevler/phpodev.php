<?php
$saat = date("H");
date_default_timezone_set('Europe/Istanbul');
if ($saat >= "06" && $saat< "10" ){
    echo 'Günaydın';
}
elseif ($saat >= "10" && $saat< "17" ){
    echo 'İyi günler';
}
elseif ($saat >= "17" && $saat< "20" ){
    echo 'İyi akşamlar';
}
elseif ($saat >= "20" && $saat< "00" ){
    echo 'İyi geceler';
}
else {
	echo 'Esenlikler dilerim';
}
?>
