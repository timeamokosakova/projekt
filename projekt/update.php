<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Doručovacia služba</title>
</head>

<a href="index.php">
    <img src="LOG.PNG" style="width:10%;height:40px">
</a>



<nav class="nav nav-pills nav-fill flex-column flex-sm-row">

    <a class="nav-item  flex-sm-fill text-sm-center nav-link" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class="nav-item  flex-sm-fill text-sm-center nav-link  " HREF="ospol.php"> O spoločnosti</A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link " HREF="OB.php"> Zásielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link active" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="kontakt.php"> Kontakt</A>

</nav>

<body>



    <DIV class="hlavna">
        <form action="update.php" method="post">
            Sledovacie číslo,ktoré ideme aktualizovať:
            <br>
            <input type="number" name="id" required id="id" VALUE="<?php echo $id?>" placeholder="Sledovacie číslo">
            <br />
            <br />

            Nový stav:
            <br>
            <input type="text" name="stav" required id="stav"  VALUE="<?php echo $stav?>"placeholder="Stav">
            <br />


            <button type="submit" class="btn btn-primary" data-toggle="modal" value="submit"> Odoslané </button>
        </form>

        <br>




   
    
    
           
     <?php include('pages/table.php') ?>
    
    
    <?php include('pages/foot.php') ?>



   
