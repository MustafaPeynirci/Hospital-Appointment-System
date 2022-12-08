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
    <title>Giriş</title>
</head>

<body background="loginbg.jpg">


<?php
 session_start();
 include("kutuphanem.php"); 
     
    if($_POST){

        $mail = $_POST["mail"];
        $pass = $_POST["pass"];

        $giris = "SELECT * FROM adminlogin WHERE kullaniciadi='$mail' AND sifre='$pass'";
        $getir = $baglanti->query($giris);

        if($getir->num_rows>0){
            while($row = $getir->fetch_assoc()){
                $_SESSION["unv"]=$row["unv"];
                header("Location:drekran.php");
            }
        }
        else{
            echo "<script type='text/javascript'>alert('EKSİK veya HATALI GİRİŞ!');</script>";
        }


    }




?>











    <div style="width: 98%">

        <form id="form1" method="post" style="margin-top:250px">

            <div class="row align-content-center justify-content-center ">
                <div class="col-md-3 kutu">
                    <h2 class="text-center" style="color:lightgrey">Doktor Girişi</h2>
                    <table class="table">
                        <tr>
                            <td>
                                <input type="text"  name="mail" class="form-control" placeholder="Kullanıcı ID"
                                    value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password"  name="pass" class="form-control" placeholder="Parola">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <input class="btn btn-success btn-block" type="submit" value="Giriş"> 
                            </td>
                        </tr>                       
                    </table>
                </div>
            </div>    
        </form>
                    
    </div>

</body>
</html>