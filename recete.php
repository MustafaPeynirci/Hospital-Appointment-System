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

?>
    

    
 <div class="anasayfa" style="margin-top:30px">
                <div class="row">
                <div class="col-md-12">
                <h3 class="tb"><i>REÇETE</i></h3>
                <table class="table table-hover tb">
                <thead>
                    <tr>   
                            <th scope="col" class="bg-warning">TC</th>
                            <th scope="col" class="bg-warning">Adı</th>
                            <th scope="col" class="bg-warning">Soyad</th>
                            <th scope="col" class="bg-warning">Hastalık</th>        
                            <th scope="col" class="bg-warning">İlaç</th>
                            <th scope="col" class="bg-warning">Doktor</th>
                            <th scope="col" class="bg-warning">Tarih</th>  
                </tr>
                </thead>
                <tbody>
                    <tr>
                    <td><?php echo $_SESSION["tc"] ?></td>
                    <td><?php echo $_SESSION["name"] ?></td>
                    <td><?php echo $_SESSION["surname"] ?></td>
                    <td><?php echo $_SESSION["hastalik"] ?></td>
                    <td><?php echo $_SESSION["ilac"] ?></td>
                    <td><?php echo $_SESSION["doktor"] ?></td>
                    <td><?php echo $_SESSION["date"] ?></td>
                    </tr>
                  
                </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block ciktiButon" >Yazdır</button>
                </div>

           
                    <script>
                        $('.ciktiButon').click(function(){
                            window.print();
                        });
                    </script>
                
               





 

</body>
</html>