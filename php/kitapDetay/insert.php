<?php
include '../ayarlar.php';
$verimiz = new veri();
if(isset($_POST['isim']) || isset($_POST['veri']) || isset($_POST['soyisim']) || isset($_POST['email']) || isset($_POST['oy']) || isset($_POST['yorum']))
{$isim = $_POST['isim'];
    $soyisim = $_POST['soyisim'];
    $email = $_POST['email'];
    $oy = $_POST['oy'];
    $elestiri = $_POST['elestiri'];
    $tarih = date('Y-m-d H:i:s');
    $kitap_id = $_POST["kitap_id"];
    $verimiz->sql_islem($kitap_id,$isim,$soyisim,$email,$elestiri,$oy,$tarih);}


      require '../success.php';
    $geldigi_sayfa = $_SERVER['HTTP_REFERER'];
    header("Refresh: 2; url=".$geldigi_sayfa."");


?>