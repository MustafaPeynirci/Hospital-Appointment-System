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
    <title>Randevu Al</title>

</head>

<body background="randevual.jpg">   

<?php
    session_start();
    include("kutuphanem.php"); 
        
   

                if ($_POST) {

                    
                    $name = $_POST['name'];
                    $surname=$_POST['surname'];
                    $tc=$_POST['tc'];
                    $sehir = $_POST['city']; 
                    $hastane = $_POST['hospital']; 
                    $bölüm = $_POST['episode']; 
                    $doktor = $_POST['doctor']; 
                    $tarih = $_POST['bdaytime']; 
                    
                    
                    if (($sehir<>"" && $hastane<>"") && ($bölüm<>"" && $doktor<>"") && ($tarih<>"" && $name<>"") && ($surname<>"" && $tc<>"" )) {
                    
                            
                        
                            if ($baglanti->query("INSERT INTO randevular (city, hospital, episode, doctor, date, name, surname, TC) VALUES ('$sehir','$hastane','$bölüm','$doktor','$tarih','$name','$surname','$tc')"))
                        {
                            echo "<script type='text/javascript'>alert('RANDEVUNUZ ALINDI!');</script>";
                                
                        }
                        else
                        {
                            echo "<script type='text/javascript'>alert('EKSİK BİLGİ GİRDİNİZ VEYA YANLIŞ İŞLEM YAPTINIZ!');</script>";
                        }
                    
                    }
                    
                }



        


?>



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
        </nav>   
    </div>


<div style="margin-top:30px; margin-right:700px">

<div class="container">

    <form action="" method="post">
        <h2 style="margin-left:1%">Bilgilerinizi Giriniz</h2>
        <input  style="margin-left:1%;" type="text" class="form" name="name" placeholder="Adınız">
        <input style="margin-left:1%" type="text" class="form" name="surname" placeholder="Soyadınız">
        <input style="margin-left:1%" type="number" class="form" name="tc" placeholder="TC Kimlik">
            
        <div class="col-md-12" style="margin-top:2%"><h2>İl Seçiniz</h2></div>
        <div class="col-md-3">
                <select name="city" id="il" class="form-control">
                    <?php 
                    $sorgu = $baglanti->query("SELECT * FROM citylist");
                    while($sehir=mysqli_fetch_array($sorgu))
                    {
                       echo "<option value=\"". $sehir["title"] ."\">".$sehir["title"]."</option>";
                    }
                    $sorgu->close();
                    ?>
                </select>
             
        </div>

        
        <div class="col-md-12"><br><h2>Hastane Seçiniz</h2></div>
        <div class="col-md-3">
            <select name="hospital" id="il" class="form-control">
                    <?php 
                    $sorgu = $baglanti->query("SELECT * FROM hosplist");
                    while($hosplist=mysqli_fetch_array($sorgu))
                    {
                       echo "<option value=\"". $hosplist["title"] ."\">".$hosplist["title"]."</option>";
                    }
                    $sorgu->close();
                    ?>
            </select>
        </div>

        <div class="col-md-12"><br><h2>Bölüm Seçiniz</h2></div>
        <div class="col-md-3">
            <select name="episode" id="il" class="form-control">
                    <?php 
                    $sorgu = $baglanti->query("SELECT * FROM epilist");
                    while($epilist=mysqli_fetch_array($sorgu))
                    {
                       echo "<option value=\"". $epilist["title"] ."\">".$epilist["title"]."</option>";
                    }
                    $sorgu->close();
                    ?> 
            </select>
        </div>

        <div class="col-md-12"><br><h2>Doktor Seçiniz</h2></div>
        <div class="col-md-3">
            <select name="doctor" id="il" class="form-control">
                    <?php 
                    $sorgu = $baglanti->query("SELECT * FROM doclist");
                    while($doclist=mysqli_fetch_array($sorgu))
                    {
                       echo "<option value=\"". $doclist["title"] ."\">".$doclist["title"]."</option>";
                    }
                    $sorgu->close();
                    ?> 
            </select>
        </div>       
        </div>

            <br><br>
            <h2 style="margin-left:6%">Randevu Tarihi</h2>
                <input style="margin-left:6%" type="datetime-local" name="bdaytime"><br><br>
                <input style="margin-left:6%" type="submit" class="btn btn-success btn-lg" value="Randevu Al" >
       
    </div>

   </form>
   
</div>

</body>
</html>