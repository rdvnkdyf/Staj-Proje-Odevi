<?php
 class veri{
  public $baglan;
 function __construct () {
        $this->baglan =mysqli_connect("localhost","root","r22031998r", "proje");
         
    }
function siralama($kitap_id) {
        $query = "SELECT * FROM elestiri WHERE kitap_id=".(string)$kitap_id." ORDER BY tarih DESC";
        $run =mysqli_query($this->baglan,$query);
        return $run;
       
    }

    function sql_islem($kitap_id,$isim,$soyisim,$email,$elestiri,$oy,$tarih) {
        $query = "INSERT INTO elestiri(`kitap_id`,`isim`,`soyisim`,`email`,`elestiri`,`oy`,`tarih`) VALUES('$kitap_id','$isim','$soyisim','$email','$elestiri','$oy','$tarih') ";
       mysqli_query($this->baglan,$query);
       
       
        
}
   function bilgi_gosterme($kitap_id){
     $sorgu="SELECT *FROM proje.kitaplar WHERE kitap_id=".(string)$kitap_id;
     $cikan=mysqli_query($this->baglan,$sorgu);
     $sonuc=mysqli_fetch_array($cikan);
     return $sonuc;
    
}
     function Select1(){
         $sorgu="SELECT * FROM kitaplar LIMIT 0,4";
         $cikan1=mysqli_query($this->baglan,$sorgu);
         return $cikan1;

     }
     function Select2(){
         $sorgu="SELECT * FROM kitaplar LIMIT 4,10";
         $cikan2=mysqli_query($this->baglan,$sorgu);
         return $cikan2;

     }

     function GetBilim(){
         $sorgu="SELECT * FROM kitaplar where turu='Bilim'";
         $cikan3=mysqli_query($this->baglan,$sorgu);
         return $cikan3;

     }


     function GetBilimKurgu(){
         $sorgu="SELECT * FROM kitaplar where turu='Bilim Kurgu'";
         $cikan4=mysqli_query($this->baglan,$sorgu);
         return $cikan4;

     }
     function GetDeneme(){
         $sorgu="SELECT * FROM kitaplar where turu='Deneme'";
         $cikan5=mysqli_query($this->baglan,$sorgu);
         return $cikan5;

     }
     function GetDunyaOyku(){
         $sorgu="SELECT * FROM kitaplar where turu='Dünya-Öykü'";
         $cikan6=mysqli_query($this->baglan,$sorgu);
         return $cikan6;

     }
     function GetFantastik(){
         $sorgu="SELECT * FROM kitaplar where turu='Fantastik'";
         $cikan7=mysqli_query($this->baglan,$sorgu);
         return $cikan7;

     }
     function GetFelsefe(){
         $sorgu="SELECT * FROM kitaplar where turu='Felsefe'";
         $cikan8=mysqli_query($this->baglan,$sorgu);
         return $cikan8;

     }
     function GetKorkuGerilim(){
         $sorgu="SELECT * FROM kitaplar where turu='Korku-Gerilim'";
         $cikan9=mysqli_query($this->baglan,$sorgu);
         return $cikan9;

     }
     function GetMacera(){
         $sorgu="SELECT * FROM kitaplar where turu='Macera'";
         $cikan10=mysqli_query($this->baglan,$sorgu);
         return $cikan10;

     }
     function GetPolisiye(){
         $sorgu="SELECT * FROM kitaplar where turu='Polisiye'";
         $cikan11=mysqli_query($this->baglan,$sorgu);
         return $cikan11;

     }




   function __destruct() {
   mysqli_close($this->baglan);
  }

}

$verimiz=new veri();

?>
