﻿<?php
if(isset($_POST['update']))
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projekt";
    $connect = mysqli_connect($servername, $username, $password, $dbname);
    //pridanie
    $id = $_POST['id'];
    $stav = $_POST['stav'];
    // zmena
    $query = "UPDATE `ob` SET `id`='".$id."',`stav`='".$stav."' WHERE `id` = $id";
    $result = mysqli_query($connect, $query);
    if($result)
    {
        echo 'Data boli aktualizované';
    }else
    {echo "data neboli aktualizované";}
    mysqli_close($connect);
}
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Doručovacia služba</title>
</head>


<a href="index.php">
    <img src="log.JPG" style="width:10%;height:40px">
</a>

<nav class="nav nav-pills nav-fill flex-column flex-sm-row">

    <a class="nav-item flex-sm-fill text-sm-center nav-link disabled" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class=" nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="ospol.php"> O spoločnosti</A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="OB.php"> Zásielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link active" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="kontakt.php"> Kontakt</A>

</nav>


<body>

    <DIV class="hlavna ">    
        
    
        <form action="update.php" method="post">
            Sledovacie ��slo,ktor� ideme aktualizova�:
            <br>
            <input type="number" name="id" required id="id"  placeholder="Sledovacie ��slo">
            <br />
            <br />

            Nov� stav:
            <br>
            <input type="text" name="stav" required id="stav"  placeholder="Stav">
            <br />


            <button type="submit" class="btn btn-primary" data-toggle="modal" value="update"> Odosla� </button>
        </form>

        <br>

      
    </DIV>

    <a href="ez.php">
        <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px" />
    </a>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>


<footer>

    T�mea Mokošáková, 2018

</footer>

</html>