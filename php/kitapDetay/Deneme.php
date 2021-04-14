<?php

require_once "../ayarlar.php";


//kitap verileri için sorgu
$cikti=$verimiz->bilgi_gosterme($_GET["type"]);
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Kitap Oyla ve Yorumla Web Uygulaması</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/styles.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
</head>

<body>
<header>

    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="../index.php"><img src="../../images/logo.jpg" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item active">
                            <a href="../index.php" class="nav-link">Ana Sayfa</a>
                        </li>
                        <li class="navbar-item">
                            <a href="../Turler/Bilim.php" class="nav-link">Kitaplar</a>
                        </li>
                        <li class="navbar-item">
                            <a href="../../about.html" class="nav-link">Hakkında</a>
                        </li>
                        <li class="navbar-item">
                            <a href="../../faq.html" class="nav-link">FAQ</a>
                        </li>

                    </ul>


                </div>
            </nav>
        </div>
    </div>
</header>
<div class="breadcrumb">
    <div class="container">
        <a class="breadcrumb-item" href="../index.php">Ana Sayfa</a>
        <span class="breadcrumb-item">Deneme</span>
        <span class="breadcrumb-item active"><?php echo ($cikti["kitap_ismi"]);?></span>
    </div>
</div>
<section class="product-sec">
    <div class="container">
        <h1 class="alert alert-secondary"><?php echo  ($cikti["kitap_ismi"]);?></h1>
        <div class="row">
            <div class="col-md-6 slider-sec">
                <!-- main slider carousel -->
                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="../../images/Deneme/<?php echo  ($cikti["kitap_link"]);?>" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="1">
                            <img src="../../images/Deneme/<?php echo  ($cikti["kitap_link"]);?>" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="../../images/Deneme/<?php echo  ($cikti["kitap_link"]);?>" class="img-fluid">
                        </div>
                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators list-inline">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="../../images/Deneme/<?php echo  ($cikti["kitap_link"]);?>" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                <img src="../../images/Deneme/<?php echo  ($cikti["kitap_link"]);?>" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                <img src="../../images/Deneme/<?php echo  ($cikti["kitap_link"]);?>" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/main slider carousel-->
            </div>
            <div class="col-md-6 slider-content">
                <h4 class="alert alert-danger">Kitap İsmi:<?php echo ($cikti["kitap_ismi"]);?></h4>
                <h4 class="alert alert-warning">Yazar:<?php echo ($cikti["kitap_yazari"]);?></h4>
                <h4 class="alert alert-success">Yayınevi:<?php echo ($cikti["yayinevi"]);?></h4>
                <h4 class="alert alert-secondary">Sayfa Sayisi:<?php echo ($cikti["sayfa_sayisi"]);?></h4>
                <h4 class="alert alert-info">Cevirmen:<?php echo  ($cikti["cevirmen"]);?></h4>
                <h4 class="alert alert-dark">Turu:<?php echo  ($cikti["turu"]);?></h4>
                <div class="btn-sec">
                    <form method = "post" action ="insert.php">
                        <div  class="form-group">
                            <label for="isim">İsim *</label>
                            <br>
                            <input type="text" name="isim" class="form-control"  placeholder="İsim Giriniz:" required="">
                            <br>
                            <label for="soyisim">Soyisim *</label>
                            <br>
                            <input type="text" name="soyisim"  class="form-control" placeholder="Soyisim Giriniz:" required="">
                            <br>
                            <label for="email">Email</label>
                            <br>
                            <input type="email" name="email"   class="form-control" placeholder="@example.com emaili giriniz:" required="">
                            <br>
                            <label for="oy">Oy * </label>
                            <br>
                            <input type="number" min="1" max="5" name="oy"  class="form-control" placeholder="Lutfen 1-5 kadar kitap oyu girin:" required="">
                            <br>
                            <label for="elestiri">Yorum *</label>
                            <br>
                            <textarea class="tinymce" name="elestiri"  class="form-control" placeholder="Yorumunuzu Giriniz:" required=""></textarea>
                            <br>
                            

                        </div>
                        <input type="hidden" value="<?php echo  ($cikti["kitap_id"]);?>" name="kitap_id">

                       <button type="submit" name="veri"  class="btn btn-primary">Yorumlayın ve Oylayın</button>
                       


                    </form>
                    <div class="result"></div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php

$sonuc=$verimiz->siralama($_GET["type"]);
//$yorum=mysqli_fetch_array($sonuc);
?>
<div class="col-md-6 slider-content" >
    <h3 style="color:blue">Yorumlar</h3>
    <?php
    while($yorum=mysqli_fetch_array($sonuc)){
        echo '<div class="">';
        echo '<h4><span class="badge badge-success">İsim:'.htmlspecialchars($yorum['isim']).' Soyisim:'.htmlspecialchars($yorum['soyisim']).'</span><span class="badge badge-warning"> Oy:'.htmlspecialchars($yorum['oy']).'</span></h4>';
        echo '<h4><span class="badge badge-pill badge-light">Yorum:'.htmlspecialchars($yorum['elestiri']).'</span></h4>';
        echo  '<h6><span class="badge badge-danger">Tarih:'.htmlspecialchars(date('d M Y', strtotime($yorum['tarih']))).'</span></h6>';
        echo '</div>';
    }

    ?>
</div>
<section class="related-books">
    <div class="container">
        <h2>Bu kitaplara da Bakabilirsiniz</h2>
        <div class="recomended-sec">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="../../images/Bilim-Kurgu/Dune-Mesihi.jpg" alt="img">
                        <h3>Dune Mesihi</h3>
                        <h6><span class="badge badge-danger"><a href="#">Kitabı görüntüle</a></span></h6>
                        <div class="hover">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="../../images/Bilim/Kara-Delikler.jpg" alt="img">
                        <h3>Kara Delikler</h3>
                        <h6><span class="badge badge-danger"><a href="#">Kitabı görüntüle</a></span></h6>

                        <div class="hover">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="../../images/Felsefe/Yürüme.jpg" alt="img">
                        <h3>Yürüme</h3>
                        <h6><span class="badge badge-danger"><a href="#">Kitabı görüntüle</a></span></h6>
                        <div class="hover">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="../../images/Dünya-Öykü/Arayıslar.jpg" alt="img">
                        <h3>Arayışlar</h3>
                        <h6><span class="badge badge-danger"><a href="#">Kitabı görüntüle</a></span></h6>
                        <div class="hover">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="address">
                    <h4>Adres</h4>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
                    <h6>Call :672 9871 3320</h6>
                    <h6>Email : ridvangs77@gmail.com</h6>
                </div>

            </div>
            <div class="col-md-3">
                <div class="navigation">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="../index.php">Ana Sayfa</a></li>
                        <li><a href="../../about.html">Hakkında</a></li>
                        <li><a href="../../privacy-policy.html">Gizlilik Politikası</a></li>
                        <li><a href="../../terms-conditions.html">Şartlar</a></li>
                        <li><a href="../Turler/Bilim.php">Kitaplar</a></li>
                    </ul>
                </div>
                <div class="navigation">
                    <h4>Yardım</h4>
                    <ul>

                        <li><a href="../../privacy-policy.html">Gizlilik</a></li>
                        <li><a href="../../faq.html">FAQ’s</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form">
                    <h3>Bizimle İletişime Geçin</h3>
                    <h6>Kitapları listelemek,yorumlamak ve oylarken rastladığınız sıkıntılar ile ilgili bizimle iletişime geçin</h6>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input placeholder="İsim" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-12">
                                <textarea type="textarea" placeholder="Mesaj"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn black">Pekala Gönder</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="share align-middle">
                        <span class="fb"><i class="fa fa-facebook-official"></i></span>
                        <span class="instagram"><i class="fa fa-instagram"></i></span>
                        <span class="twitter"><i class="fa fa-twitter"></i></span>
                        <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                        <span class="google"><i class="fa fa-google-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="../../js/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script type="../text/javascript" src="js/owl.carousel.min.js"></script>
<script src="../../js/custom.js"></script>
</body>

</html>