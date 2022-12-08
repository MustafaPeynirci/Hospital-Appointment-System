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
    <title>Online Randevu</title>

</head>

<body>


<?php 
session_start();
include("kutuphanem.php"); 

if($_POST){

    $tc = $_POST["tc"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $date = $_POST["date"];
    $doktor = $_POST["doktor"];
    $hastalik = $_POST["hastalik"];
    $ilac = $_POST["ilac"];


    
    if (($tc<>"" && $name<>"") && ($surname<>"" && $date<>"") && ($doktor<>"" && $hastalik<>"") && $ilac<>"") {
                if ($baglanti->query("INSERT INTO hasta (tc, ad, soyad, hastalik, ilac, doktor, tarih) VALUES ('$tc','$name','$surname','$hastalik','$ilac','$doktor','$date')"))
            {
                
               $sorgu = "SELECT * FROM hasta;";
               
               $cikti = $baglanti->query($sorgu);
                if($cikti->num_rows>0){
                    while($row = $cikti->fetch_array()){
                        $_SESSION["tc"]=$row["tc"];
                        $_SESSION["name"]=$row["ad"];
                        $_SESSION["surname"]=$row["soyad"];
                        $_SESSION["hastalik"]=$row["hastalik"];
                        $_SESSION["ilac"]=$row["ilac"];
                        $_SESSION["doktor"]=$row["doktor"];
                        $_SESSION["date"]=$row["tarih"];
                      
                    }
                    header('Location:recete.php'); 
                        if (time_nanosleep(0, 500000000) === true) {
                            $sil=$baglanti->query("DELETE FROM randevular WHERE date = '$date'");
                            $_SESSION["tc"]="";
                            $_SESSION["name"]="";
                            $_SESSION["surname"]="";
                            $_SESSION["date"]="";
                        }
                }
         
            }
          
         
        }
}
?>

  <div>
    <nav class="nav navbar-expand-md justify-content-center navbar-dark bg-dark ">
            <a class="navbar-brand" href="">
                <img class="logo imgsize" src="randevu_image.png" alt="">
            </a>
           
            <div class="collapse navbar-collapse  justify-content-center  " id="navham">
            <h1 style="color: white"><?php echo $_SESSION["unv"] ?></h1>
            </div>
            <div class="nav  d-none d-md-flex kayıtsize ">
                <a class="nav-link justify-content-right text-white" href="index.php">Çıkış Yap</a>    
            </div>
    </nav>
 </div>          


 <div class="anasayfa" style="margin-top:20px">
                <div class="row">
                <div class="col-md-6">
                <h3 class="tb">Sıradaki Hasta Bilgileri</h3>
                <table class="table table-hover tb">
                <thead>
                    <tr>              
                    <th scope="col" class="bg-warning">Tarih</th>
                    <th scope="col" class="bg-warning">Adı</th>
                    <th scope="col" class="bg-warning">Soyadı</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      $sorgu = $baglanti->query("SELECT * FROM randevular ORDER BY date;");
                    if(!empty($sorgu)){
                      
                        while($cikti=mysqli_fetch_array($sorgu))
                    {
                        echo "<tr>";
                       echo "<td>".$cikti["date"]."</td>";
                       echo "<td>".$cikti["name"]."</td>";
                       echo "<td>".$cikti["surname"]."</td>";
                        echo "</tr>";
                    }
                    
                }
                    else{
                        echo "<tr>";
                        echo "<td>"."</td>";
                        echo "<td>"."</td>";
                        echo "<td>"."</td>";
                         echo "</tr>"; 
                    }
                   
                    ?>
                </tbody>
                </table>
                </div>
                <div class="col-md-6">
                <h3 class="tb">İçerdeki Hasta Bilgileri</h3>
                <table class="table table-hover tb">
                <thead>
                    <tr>
                    <th scope="col" class="bg-warning">TC Kimlik</th>
                    <th scope="col" class="bg-warning">Adı</th>
                    <th scope="col" class="bg-warning">Soyadı</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                 $sorgu = "SELECT * FROM randevular ORDER BY date DESC;";
                   if(!empty($sorgu)){ 
                    
                     $cikti = $baglanti->query($sorgu);
                     if($cikti->num_rows>0){
                         while($row = $cikti->fetch_array()){
                             $_SESSION["tc"]=$row["TC"];
                             $_SESSION["name"]=$row["name"];
                             $_SESSION["surname"]=$row["surname"];
                             $_SESSION["date"]=$row["date"];
                            }
                            echo "<tr>";
                            echo "<td scope=\"col\">".$_SESSION["tc"]."</td>";
                            echo "<td scope=\"col\">".$_SESSION["name"]."</td>";
                            echo "<td scope=\"col\">".$_SESSION["surname"]."</td>";
                            echo "</tr>";
                    }   
                }else{
                    echo "<tr>";
                    echo "<td scope=\"col\">"."</td>";
                    echo "<td scope=\"col\">"."</td>";
                    echo "<td scope=\"col\">"."</td>";
                    echo "</tr>";
                }
                    ?>

                    
            
                    

                </tbody>
                </table>
                </div>
                <div class="row"></div>
                    <div class="col-md-8">
                        <h3 class="tb">Hastanın Önceden Kullandığı İlaçlar</h3>
                        <table class="table table-hover tb">
                        <thead>
                            <tr>      
                            <th scope="col" class="bg-primary">TC</th>
                            <th scope="col" class="bg-primary">Adı</th>
                            <th scope="col" class="bg-primary">Soyad</th>
                            <th scope="col" class="bg-primary">Hastalık</th>        
                            <th scope="col" class="bg-primary">İlaç</th>
                            <th scope="col" class="bg-primary">Doktor</th>
                            <th scope="col" class="bg-primary">Tarih</th>
                            </tr>
                        </thead>
                <tbody>
                        <?php
                        
                     
                       
                        $tc=$_SESSION["tc"];
                        $ghas = $baglanti->query("SELECT * FROM hasta WHERE TC = '$tc'");
                        if(!empty($ghas)){ 
                        while($ghasta=mysqli_fetch_array($ghas))
                                 {
                                    echo "<tr>";
                                    echo "<td>".$ghasta["tc"]."</td>";
                                    echo "<td>".$ghasta["ad"]."</td>";
                                    echo "<td>".$ghasta["soyad"]."</td>";
                                    echo "<td>".$ghasta["hastalik"]."</td>";
                                    echo "<td>".$ghasta["ilac"]."</td>";
                                    echo "<td>".$ghasta["doktor"]."</td>";
                                    echo "<td>".$ghasta["tarih"]."</td>";
                                    echo "</tr>";
                                 } 
                            }
                             else{
                                 echo "<tr>";
                                 echo "<td>"."</td>";
                                 echo "<td>"."</td>";
                                 echo "<td>"."</td>";
                                 echo "<td>"."</td>";
                                 echo "<td>"."</td>";
                                 echo "<td>"."</td>";
                                 echo "<td>"."</td>";
                                 echo "</tr>";
                             }           
                        ?>
                        </tbody>
                        </table>
                    </div>
                        <div class="col-md-4">
                        <h3 class="tb">İlaç Yaz</h3>
                        <form method="post">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">TC Kimlik</label>
                                <input type="text" name="tc" class="form-control" id="exampleFormControlInput1"   value="<?php echo $_SESSION["tc"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Ad</label>
                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_SESSION["name"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Soyad</label>
                                <input type="text" name="surname" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_SESSION["surname"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Tarih</label>
                                <input type="text" name="date" class="form-control" id="exampleFormControlInput1"  value="<?php echo $_SESSION["date"] ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Doktor</label>
                                <input type="text" name="doktor" class="form-control" id="exampleFormControlInput1"  value=" <?php echo $_SESSION["unv"] ?>">
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Hastalığı</label>
                                <input type="text" name="hastalik" class="form-control" id="exampleFormControlInput1" >
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">İlaç Adı</label>
                                <input type="text" name="ilac" class="form-control" id="exampleFormControlInput1"  >
                            </div>

                           <button type="submit" class="btn btn-success btn-lg btn-block">Reçete Oluştur</button>     
                    </form>
                        </div> 
                        </div>                   
 </div>
</body>
</html>