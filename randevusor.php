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
    <title>Randevu Sorgula</title>

</head>
<body>
<div>

<?php 
 session_start();
 include("kutuphanem.php"); 
?>
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
    
 
    <body class="doktorlarbg" background="doktorbg.jpg">  
    <div class="anasayfa" style="margin-top:20px">
    <div class="row"> 

    <form action="" method="post">
        <input type="number" class="form form-control" style="margin-left: 120px" name="tc" placeholder="TC Kimlik">
        <input type="submit" class="btn btn-success btn-lg " style="float: left; margin-top:-40px" value="Sorgula">
    </form>

   
                <div class="col-md-12" style="margin-top:5%">
                <h2 class="tb">Randevu Bilgileriniz</h2><br>
                <table class="table table-hover tb">
                <thead>
                    <tr>              
                    <th scope="col" class="bg-warning">Tarih</th>
                    <th scope="col" class="bg-warning">Hastane</th>
                    <th scope="col" class="bg-warning">Bölüm</th>
                    <th scope="col" class="bg-warning">Adınız</th>
                    <th scope="col" class="bg-warning">Soyadınız</th>
                    
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">
                        <?php 
                            if($_POST)
                            {
                                $tc = $_POST["tc"];
                                $sorgu = $baglanti->query("SELECT * FROM randevular WHERE TC='$tc' ");
                                while($tc=mysqli_fetch_array($sorgu))
                                    {
                                        echo $tc["date"];
                                    }
                            } 
                        ?>
                    </th>
                    <td>
                        <?php 
                            if($_POST)
                            {
                                $tc = $_POST["tc"];
                                $sorgu = $baglanti->query("SELECT * FROM randevular WHERE TC='$tc' ");
                                while($tc=mysqli_fetch_array($sorgu))
                                    {
                                        echo $tc["hospital"];
                                    }
                            } 
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($_POST)
                            {
                                $tc = $_POST["tc"];
                                $sorgu = $baglanti->query("SELECT * FROM randevular WHERE TC='$tc' ");
                                while($tc=mysqli_fetch_array($sorgu))
                                    {
                                        echo $tc["episode"];
                                    }
                            } 
                        ?>
                    </td>
                    <td>
                        <?php 
                            if($_POST)
                            {
                                $tc = $_POST["tc"];
                                $sorgu = $baglanti->query("SELECT * FROM randevular WHERE TC='$tc' ");
                                while($tc=mysqli_fetch_array($sorgu))
                                    {
                                        echo $tc["name"];
                                    }
                            } 
                        ?>
                    </td>
                    <td>
                    <?php 
                          if($_POST)
                        {
                            $tc = $_POST["tc"];
                            $sorgu = $baglanti->query("SELECT * FROM randevular WHERE TC='$tc' ");
                            while($tc=mysqli_fetch_array($sorgu))
                                {
                                    echo $tc["surname"];
                                }
                        } 
                    ?>
                    </td>
                    </tr>
                </tbody>
                </table>
                </div>
        
        
</div>




</body>
</html>