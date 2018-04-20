
<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Doručovacia služba</title>
</head>




<nav class="nav nav-pills nav-fill flex-column flex-sm-row">

    <a class="nav-item  flex-sm-fill text-sm-center nav-link" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class="nav-item  flex-sm-fill text-sm-center nav-link  " HREF="ospol.php"> O spoločnosti</A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link active " HREF="OB.php"> Zásielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="kontakt.php"> Kontakt</A>

</nav>

<body>

    <DIV class="hlavna ">
        <form method="post" action="ob.php">

            <div class="form-group row">
                <label for="Odosielateľ " class="col-sm-2 col-form-label"> Odosielateľ:  </label>
            </div>

            <div class="form-group">
                <label for="menoo">Meno </label>
                <input type="text" class="form-control" required id="menoo" name="menoo" placeholder="Meno odosielateĺa">
                <label for="priezo">Priezvisko </label>
                <input type="text" class="form-control" required id="priezo" name="priezo" placeholder="Priezvisko odosielateĺa">
            </div>

            <div class="form-group row">
                <label for="Adresát " class="col-sm-2 col-form-label"> Adresát:  </label>
            </div>
            <div class="form-group">
                <label for="menoa">Meno adresáta </label>
                <input type="text" class="form-control" required id="menoa" name="menoa" placeholder="Meno adresáta">
                <label for="prieza"> Priezvisko adresáta </label>
                <input type="text" class="form-control" required id="prieza" name="prieza" placeholder="Priezvisko ">
            </div>


            <div class="form-group row">
                <label for="adresa " class="col-sm-2 col-form-label"> Adresa:  </label>
            </div>
            <div class="form-group">
                <label for="ulica"> Ulica  </label>
                <input type="text" class="form-control" required id="ulica" name="ulica" placeholder="Ulica">
                <label for="cd">Číslo domu </label>
                <input type="number" class="form-control" required id="cd" name="cd" placeholder="Číslo domu">
                <label for="obec">Obec </label>
                <input type="text" class="form-control" required id="obec" name="obec" placeholder="Obec">
                <label for="psc"> Psč </label>
                <input type="number" class="form-control" required id="psc" name="psc" placeholder="Psč">
                <label for="stat"> Štát </label>
                <input type="text" class="form-control" required id="stat" name="stat" placeholder="Štát">
            </div>


            <div class="form-group row">
                <label for="zasielka " class="col-sm-2 col-form-label"> Druh zásielky:  </label>
            </div>
            <div class="form-group">
                <label for="druh">Druh </label>
                <input type="text" class="form-control" required id="druh" name="druh" placeholder="Druh">
                <label for="cena">Cena </label>
                <input type="integer" class="form-control" required id="cena" name="cena" placeholder="Cena je povinná s .">
            </div>



            <center>
                <button type="submit" class="btn btn-primary" required id="submit" data-toggle="modal" name="submit" value="submit"> Odoslať </button>
            </center>

        </form>
     
   
    
    <?php
    if(isset($_POST["submit"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projekt";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    
    if(!$conn->set_charset ("utf8")){
        echo ( $conn->error);
        exit();
    }


    $menoo = mysqli_real_escape_string($conn, $_POST['menoo']);
    $priezo = mysqli_real_escape_string($conn, $_POST['priezo']);
    $menoa = mysqli_real_escape_string($conn, $_POST['menoa']);
    $prieza = mysqli_real_escape_string($conn, $_POST['prieza']);
    $ulica = mysqli_real_escape_string($conn, $_POST['ulica']);
    $cd = mysqli_real_escape_string($conn, $_POST['cd']);
    $obec = mysqli_real_escape_string($conn, $_POST['obec']);
    $psc = mysqli_real_escape_string($conn, $_POST['psc']);
    $stat = mysqli_real_escape_string($conn, $_POST['stat']);
    $druh = mysqli_real_escape_string($conn, $_POST['druh']);
    $cena = mysqli_real_escape_string($conn, $_POST['cena']);


    $sql = "INSERT INTO ob (menoo, priezo, menoa, prieza, ulica, cd, obec, psc, stat, druh, cena, stav)
    VALUES ('$menoo','$priezo','$menoa','$prieza','$ulica','$cd','$obec','$psc','$stat','$druh','$cena','Spracovaná objednávka')";
    if($conn->query($sql) === true  ){
    $last_id = $conn->insert_id;
    echo "  Sledovacie číslo je: ".$last_id. " Odporúčame si ho zapísať.";
    }
    else
    {
    echo "Error" . $sql . "<br/>" . $conn->error;
    }
    $conn->close();
    }
    ?>
  
    <?php include('pages/foot.php') ?>



