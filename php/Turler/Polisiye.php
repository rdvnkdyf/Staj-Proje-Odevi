<?php
require_once "../ayarlar.php";
?>
<!DOCTYPE html>
<html lang="en">

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
    <style>
    .img1{
        width:65px;
        height:30px;

}
</style>
</head>


<body>
    <header>
        
        <div class="main-menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"><img src="../../images/logo.jpg" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                        <li class="navbar-item">
                                <a href="../index.php" class="nav-link">Ana Sayfa</a>
                            </li>
                            <li class="navbar-item active">
                                <a href="Bilim.php" class="nav-link">Kitaplar</a>
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
            <span class="breadcrumb-item active">Kitaplar</span>
            <span class="breadcrumb-item">Polisiye</span>
        </div>
    </div>
    <section class="static about-sec">
        <div class="container">

            <h2>Polisiye Kitapları</h2>
            <div class="recent-book-sec">
                <div class="row">
                    <?php
                    $data = new veri();
                    $result = $data->GetPolisiye();
                    while($data=mysqli_fetch_array($result)):
                    ?>
                    <div class="col-md-3">
                        <div class="item">
                            <img src="../../images/Polisiye/<?php echo $data["kitap_link"]; ?>" alt="img">
                            <h3><a href="../kitapDetay/Polisiye.php?type=<?php echo $data["kitap_id"]?>"><?php echo $data["kitap_ismi"]; ?></a></h3>
                            
                        </div>
                    </div>
                    <?php
                    endwhile;
                    ?>

                <div class="btn-sec">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-circle pg-blue">
                          
                          <li class="page-item"><a class="page-link" href="Bilim.php">1</a></li>
                          <li class="page-item"><a class="page-link" href="Bilim-Kurgu.php">2</a></li>
                          <li class="page-item"><a class="page-link" href="Deneme.php">3</a></li>
                          <li class="page-item"><a class="page-link" href="Dünya-Öykü.php">4</a></li>
                          <li class="page-item"><a class="page-link" href="Fantastik.php">5</a></li>
                          <li class="page-item"><a class="page-link" href="Felsefe.php">6</a></li>
                          <li class="page-item "><a class="page-link" href="Korku-Gerilim.php">7</a></li>
                          <li class="page-item"><a class="page-link" href="Macera.php">8</a></li>
                          <li class="page-item active"><a class="page-link" href="Polisiye.php">9</a></li>
                          
                        </ul>
                      </nav>
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
                            <li><a href="Bilim.php">Kitaplar</a></li>
                        </ul>
                    </div>
                    <div class="navigation">
                        <h4>Yardım</h4>
                        <ul>
                            
                        <li><a href="../../privacy-policy.html">Gizlilik</a></li>
                            <li><a href="../../faq.html">FAQ’s</a></li>
                        </ul>
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
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>