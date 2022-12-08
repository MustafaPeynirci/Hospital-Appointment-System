<?php
session_start();
//include ("kutuphanem.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <title>Anasayfa</title>

</head>

<body>   
    <div>
        <nav class="nav navbar-expand-md justify-content-center navbar-dark bg-dark ">
            <a class="navbar-brand" href="">
                <img class="logo imgsize" src="randevu_image.png" alt="">
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navham">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-center  " id="navham">
              <ul class="navbar-nav ">
                <li class="nav-item navsize">
                    <a class="nav-link" href="index.php">Anasayfa</a>
                </li>
                <li class="nav-item navsize">
                    <a class="nav-link" href="randevu.php">Randevu Al</a>
                </li>
                <li class="nav-item navsize">
                    <a class="nav-link" href="randevusor.php">Randevu Sorgula</a>
                </li>
                <li class="nav-item navsize">
                    <a class="nav-link" href="doktorlar.php">Doktorlarımız</a>
                </li>
                <li class="nav-item navsize">
                    <a class="nav-link" href="hakk.php">Hakkımızda</a>
                </li>
                <li class="nav-item navsize">
                    <a class="nav-link" href="ilet.php">İletişim</a>
                </li>
              </ul>
            </div>
            <div class="nav  d-none d-md-flex kayıtsize ">
                <a class="nav-link justify-content-right text-white" href="login.php">Giriş</a>
                   
            </div>
        </nav>   
    </div>


    <div class="anasayfa" style="margin-top:20px">
       
        <div class="row">

            <div class="col-md-3">
                <div class="card w-100 bg-dark text-light" >
                <img src="asii.jpg" class="card-img-top" >
                <div class="card-body">
                    <p class="card-text">
                        Corona aşısı bunu nasıl sağlıyor? Vücudu, zayıflatılmış ya da hastalık yapma gücü olmayan mikroorganizmalarla uyarmış oluyor, yani vücudun hafıza hücrelerine bu virüsü tanıtmış oluyorsunuz. Bir gün covid-19 virüsünün gerçeği, 
                        hastalık yapma yeteneğinde olan hali insan vücuduna girdiğinde; vücut bir önceki aşı çalışmasından virüsü tanıdığı için daha hızlı cevap verebiliyor ve virüsü öldürebilecek antikorları bir an önce virüsün/bakterinin üzerine salarak zaman kazanmış oluyor. 
                        Aslında hastalık yapan virüsün, zayıf halini, yani hastalık yapmayan halinin vücuda tanıtılması işlemine aşı deniyor.
                    </p>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block" style="color:black">
                            <h5>Sizin İçin...</h5>
                            <p>Sizlere hizmet vermekten mutluluk duyuyoruz.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Projemiz</h5>
                            <p>Yepyeni hastanemizin sizlerle buluşmasına çok az kaldı...</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block" style="color:black">
                                <h5>Acil</h5>
                                <p>Acil bölümü hizmete hazır.</p>
                            </div>
                        </div>
                    </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Geri</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">İleri</span>
                </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card w-100 bg-dark text-light">
                    <img src="corona.jpg" class="card-img-top" >
                <div class="card-body">
                    <p class="card-text">
                        Yeni Koronavirüs Hastalığı (COVID-19), ilk olarak Çin’in Vuhan Eyaleti’nde Aralık ayının sonlarında solunum yolu belirtileri (ateş, öksürük, nefes darlığı) gelişen bir grup hastada yapılan araştırmalar sonucunda 13 Ocak 2020’de tanımlanan bir virüstür.
                        Salgın başlangıçta bu bölgedeki deniz ürünleri ve hayvan pazarında bulunanlarda tespit edilmiştir. Daha sonra insandan insana bulaşarak Vuhan başta olmak üzere Hubei eyaletindeki diğer şehirlere ve Çin Halk Cumhuriyeti’nin diğer eyaletlerine ve diğer dünya ülkelerine yayılmıştır. 
                        Hayvanlarda veya insanlarda hastalığa neden olabilecek büyük bir virüs ailesidir.
                    </p>
                </div>
                </div>
            </div>

        </div>

    </div>

    

    <div class="footer">
        
        <div>
            <h4>Online Randevu</h4>
            <pre>
            www.onlinerandevu.com            
Adres: Dpü Yerleşkesi, Üniversiteler Mahallesi
Dumlupınar Bulvarı Cadde No: 3 
Tavşanlı / Kütahya
+90 (274) 112 100
            </pre>
        </div>
    </div>



        


</body>
</html>