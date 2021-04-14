<?php
require_once "ayarlar.php";



?>
<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Kitap Oyla ve Yorumla Web Uygulaması</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .img1 {
            width: 65px;
            height: 30px;

        }
    </style>

</head>

<body>
<header>

    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php"><img src="../images/logo.jpg" alt="logo" clas="img1"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item active">
                            <a href="index.php" class="nav-link">Ana Sayfa</a>
                        </li>
                        <li class="navbar-item">
                            <a href="Turler/Bilim.php" class="nav-link">Kitaplar</a>
                        </li>
                        <li class="navbar-item">
                            <a href="../about.html" class="nav-link">Hakkında</a>
                        </li>
                        <li class="navbar-item">
                            <a href="../faq.html" class="nav-link">FAQ</a>
                        </li>


                    </ul>

                </div>
            </nav>
        </div>
    </div>
</header>
<section class="slider">
    <div class="container">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <div class="slide">
                    <img src="../images/slide1.jpg" alt="slide1">
                    <div class="content">
                        <div class="title">
                            <h3>Kitap Web Uygulaması</h3>
                            <h5>Kitapları görüntüleyin,oylayın ve yorumlayın.</h5>
                            <a href="Turler/Bilim.php" class="btn">Kitapları görüntüle</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide">
                    <img src="../images/slide2.jpg" alt="slide1">
                    <div class="content">
                        <div class="title">
                            <h3>Kitap Web Uygulaması</h3>
                            <h5>Kitapları görüntüleyin,oylayın ve yorumlayın.</h5>
                            <a href="Turler/Bilim.php" class="btn">Kitapları görüntüle</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide">
                    <img src="../images/slide3.jpg" alt="slide1">
                    <div class="content">
                        <div class="title">
                            <h3>Kitap Web Uygulaması</h3>
                            <h5>Kitapları görüntüleyin,oylayın ve yorumlayın.</h5>
                            <a href="Turler/Bilim.php" class="btn">Kitapları görüntüle</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide">
                    <img src="../images/slide4.jpg" alt="slide1">
                    <div class="content">
                        <div class="title">
                            <h3>Kitap Web Uygulaması</h3>
                            <h5>Kitapları görüntüleyin,oylayın ve yorumlayın.</h5>
                            <a href="Turler/Bilim.php" class="btn">Kitapları görüntüle</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="recomended-sec">
    <div class="container">
        <div class="title">
            <h2>Editörün Önerdiği Kitaplar</h2>
            <hr>
        </div>
        <div class="row">
            <?php
            $data = new veri();
            $result = $data->Select1();
            while($data=mysqli_fetch_array($result)):
            ?>
            <div class="col-lg-3 col-md-6">
                <div class="item">
                    <img src="../images/Bilim/<?php echo $data["kitap_link"]; ?>" alt="img">
                    <h3><?php echo $data["kitap_ismi"]; ?></h3>
                    <h6><span class="badge badge-danger"><a href="#">Kitabı görüntüle</a></span>
                    </h6>
                    <div class="hover">
                        <a href="kitapDetay/Bilim.php?type=<?php echo $data["kitap_id"]?>">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </a>
                    </div>
                </div>
            </div>
           <?php
          endwhile;
           ?>
        </div>
    </div>
</section>
<section class="about-sec">
    <div class="about-img">
        <figure style="background:url(./images/about-img.jpg)no-repeat;"></figure>
    </div>
    <div class="about-content">
        <h2>Uygulama Hakkında</h2>
        <p>Bilim,bilim kurgu,deneme,dünya öykü,fantastik felsefe,korku-gerilim,macera ve polisiye türlerinin bulunduğu
            kitapları görüntüleyin.</p>
        <p>Görüntülediğiniz kitapları okuyun,oylayın ve yorumlayın.Global olarak herkes görüntülediğinde yorumlara ve
            oylamaya göre kitapları tercih edip okusun.</p>
        <div class="btn-sec">
            <a href="Turler/Bilim.php" class="btn yellow">Kitapları görüntüle</a>

        </div>
    </div>
</section>
<section class="recent-book-sec">
    <div class="container">
        <div class="title">
            <h2>Okurlar tarafından önerilen kitaplar</h2>
            <hr>
        </div>
        <div class="row">
            <?php
            $data2 = new veri();
            $result2 = $data2->Select2();
            while($data2=mysqli_fetch_array($result2)):
            ?>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="item">
                    <img src="../images/Bilim/<?php echo $data2["kitap_link"]; ?>" alt="img">
                    <h3><a href="kitapDetay/Bilim.php?type=<?php echo $data2["kitap_id"]?>"><?php echo $data2["kitap_ismi"]; ?></a></h3>
                    <h6></h6>
                </div>
            </div>

            <?php
             endwhile;
            ?>

        </div>
        <div class="btn-sec">
            <a href="Turler/Bilim.php" class="btn gray-btn">Daha çok kitap görüntüle</a>
        </div>
    </div>
</section>
<section class="features-sec">
    <div class="container">
        <ul>
            <li>
                <span class="icon"><i class="fas fa-check-circle" aria-hidden="true"></i></i></span>
                <h3>Sade Klasik Tasarım</h3>
                <h5>Klasik Kolay Tasarım</h5>
                <h6>Günümüzde karşılaştığımız örneklerin aksine Web uygulasının kullanımı basittir.</h6>
            </li>
            <li>
                <span class="icon return"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                <h3>Çeşitli Kitap Türleri</h3>
                <h5>Zengin İçerik</h5>
                <h6>Uygulamanın alternatifleri arasında daha iyileri olsa da kendi çapında tür sayısı olarak
                    zengindir.</h6>
            </li>
            <li>
                <span class="icon chat"><i class="fas fa-check-circle" aria-hidden="true"></i></span>
                <h3>Yorumla ve Oyla</h3>
                <h5>Fikir Paylaşmak</h5>
                <h6>Okuduğunuz kitap veya kitaplarla ilgili eleştirilerinizi yazınız ve oylayınız.Yaptığınız eleştiriler
                    ve yorumları herkes görüntülesin.</h6>
            </li>
        </ul>
    </div>
</section>
<section class="offers-sec" style="background:url(images/offers.jpg)no-repeat;">
    <div class="cover"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="detail">
                    <h3>Zengin İçerik</h3>
                    <h6>9 farklı türden olusan 180 kitabı görüntüleyin.</h6>
                    <a href="Turler/Bilim.php" class="btn blue-btn">Kitapları görüntüleyin</a>
                    <span class="icon-point percentage">
                            <img src="images/precentagae.png" alt="">
                        </span>
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail">
                    <h3>Yorumlama ve Oylama Fırsatı</h3>
                    <h6>Görüntülediğiniz kitabı oylayın ve yorumlayın.</h6>
                    <a href="Turler/Bilim.php" class="btn blue-btn">Kitapları görüntüleyin.</a>
                    <span class="icon-point amount"><img src="images/amount.png" alt=""></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="testimonial-sec">
    <div class="container">
        <div id="testimonal" class="owl-carousel owl-theme">
            <div class="item">
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's printer took a galley of type and Scrambled it to make a type and typesetting industry.
                    been the book</h3>
                <div class="box-user">
                    <h4 class="author">Susane Mathew</h4>
                    <span class="country">Australia</span>
                </div>
            </div>
            <div class="item">
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's printer took a galley of type and Scrambled it to make a type and typesetting industry.
                    been the book</h3>
                <div class="box-user">
                    <h4 class="author">Da Pra Gabbard</h4>
                    <span class="country">Spain</span>
                </div>
            </div>
            <div class="item">
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's printer took a galley of type and Scrambled it to make a type and typesetting industry.
                    been the book</h3>
                <div class="box-user">
                    <h4 class="author">O'Cain O'Guin</h4>
                    <span class="country">Germany</span>
                </div>
            </div>
            <div class="item">
                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's printer took a galley of type and Scrambled it to make a type and typesetting industry.
                    been the book</h3>
                <div class="box-user">
                    <h4 class="author">Sable Gagnier</h4>
                    <span class="country">Brazil</span>
                </div>
            </div>
        </div>
    </div>
    <div class="left-quote">
        <img src="images/left-quote.png" alt="quote">
    </div>
    <div class="right-quote">
        <img src="images/right-quote.png" alt="quote">
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="address">
                    <h4>Adres</h4>
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</h6>
                    <h6>Call :672 9871 3320</h6>
                    <h6>Email : ridvangs77@gmail.com</h6>
                </div>

            </div>
            <div class="col-md-3">
                <div class="navigation">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li><a href="../about.html">Hakkında</a></li>
                        <li><a href="../privacy-policy.html">Gizlilik Politikası</a></li>
                        <li><a href="../terms-conditions.html">Şartlar</a></li>
                        <li><a href="Turler/Bilim.php">Kitaplar</a></li>
                    </ul>
                </div>
                <div class="navigation">
                    <h4>Yardım</h4>
                    <ul>

                        <li><a href="../privacy-policy.html">Gizlilik</a></li>
                        <li><a href="../faq.html">FAQ’s</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form">
                    <h3>Bizimle İletişime Geçin</h3>
                    <h6>Kitapları listelemek,yorumlamak ve oylarken rastladığınız sıkıntılar ile ilgili bizimle
                        iletişime geçin</h6>
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
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/owl.carousel.min.js"></script>
<script src="../js/custom.js"></script>
</body>

</html>