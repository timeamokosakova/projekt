<?php
$conn = mysqli_connect ("localhost" ,"root","","projekt");

if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}


if(isset ($_post['btninsert'])){
    $menoo =  $_POST['menoo'];
    $priezo = $_POST['priezo'];
    $menoa =  $_POST['menoa'];
    $prieza =  $_POST['prieza'];
    $ulica =  $_POST['ulica'];
    $cd = $_POST['cd'];
    $obec =  $_POST['obec'];
    $psc =  $_POST['psc'];
    $stat =  $_POST['stat'];
    $druh =  $_POST['druh'];
    $cena =  $_POST['cena'];
    $stav =  $_POST['stav'];


    $sql = mysqli_query($conn, "INSERT INTO ob (menoo, priezo, menoa, prieza, ulica, cd, obec, psc, stat, druh, cena, stav)
        VALUES ('$menoo','$priezo','$menoa','$prieza','$ulica','$cd','$obec','$psc','$stat','$druh','$cena','Spracovane')");

    if(!sql){
        echo "Nie s˙ vloûenÈ d·ta";
    }
    else {
        echo "VloûenÈ";
    }

}

?>



<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>DoruËovacia sluûba</title>
</head>


<a href="index.php">
    <img src="log.JPG" style="width:10%;height:40px">
</a>

<nav class="nav nav-pills nav-fill flex-column flex-sm-row">

    <a class="nav-item flex-sm-fill text-sm-center nav-link disabled" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class=" nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="ospol.php"> O spoloËnosti</A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link active" HREF="OB.php"> Z·sielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="SZ.php"> Sledovanie z·sielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="EZ.php"> Spr·va z·sielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="kontakt.php"> Kontakt</A>

</nav>


<body>
    <DIV class="hlavna ">
        <form method="post" action="ob.php">

            <div class="form-group row">
                <label for="Odosielateæ " class="col-sm-2 col-form-label"> Odosielateæ:  </label>
            </div>

            <div class="form-group">
                <label for="menoo">Meno </label>
                <input type="text" class="form-control" required id="menoo" name="menoo" placeholder="Meno odosielateÂa">
                <label for="priezo">Priezvisko </label>
                <input type="text" class="form-control"required id="priezo" name="priezo" placeholder="Priezvisko odosielateÂa">
            </div>

            <div class="form-group row">
                <label for="Adres·t " class="col-sm-2 col-form-label"> Adres·t:  </label>
            </div>
            <div class="form-group">
                <label for="menoa">Meno adres·ta </label>
                <input type="text" class="form-control"  required id="menoa" name="menoa" placeholder="Meno adres·ta">
                <label for="prieza"> Priezvisko adres·ta </label>
                <input type="text" class="form-control" required id="prieza" name="prieza" placeholder="Priezvisko ">
            </div>


            <div class="form-group row">
                <label for="adresa " class="col-sm-2 col-form-label"> Adresa:  </label>
            </div>
            <div class="form-group">
                <label for="ulica"> Ulica  </label>
                <input type="text" class="form-control" required id="ulica" name="ulica" placeholder="Ulica">
                <label for="cd">»Ìslo domu </label>
                <input type="number" class="form-control" required id="cd" name="cd" placeholder="»Ìslo domu">
                <label for="obec">Obec </label>
                <input type="text" class="form-control" required id="obec" name="obec" placeholder="Obec">
                <label for="psc"> PsË </label>
                <input type="number" class="form-control" required id="psc" name="psc" placeholder="PsË">
                <label for="stat"> ät·t </label>
                <input type="text" class="form-control" required id="stat" name="stat" placeholder="ät·t">
            </div>


            <div class="form-group row">
                <label for="zasielka " class="col-sm-2 col-form-label"> Druh z·sielky:  </label>
            </div>
            <div class="form-group">
                <label for="druh">Druh </label>
                <input type="text" class="form-control" required id="druh" name="druh" placeholder="Druh">
                <label for="cena">Priezvisko adres·ta </label>
                <input type="integer" class="form-control" required id="cena" name="cena" placeholder="Cena je povinn· s .">
            </div>



            <center>
                <button type="submit" class="btn btn-primary" data-toggle="modal" value="btninsertù"> Odoslaù </button>
            </center>

        </form>
    </DIV>


        <div class=" tab">            <?php
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
                                      $sql = "SELECT id FROM ob LIMIT 1 ";
                                      $result = $conn->query($sql);
                                      if ($result->num_rows > 0) {
                                          echo "<table><tr><th>ID</th></tr>";
                                          // output data of each row
                                          while($row = $result->fetch_assoc()) {
                                              echo "<tr><td>" . $row["id"]. "</td></tr>";
                                          }
                                          echo "</table>";
                                      } else {
                                          echo "0 results";
                                      }
                                      $conn->close();
                                      ?>
        </div>


        <button type="submit" name="submit" class="btn btn-primary" value="Sp‰ù" onclick="history.back(-1)">
            Sp‰ù
        </button>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<footer>

    TÌmea Mokoö·kov·, 2018

</footer>

</html>



