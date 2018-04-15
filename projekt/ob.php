
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
    <A class="nav-item flex-sm-fill text-sm-center nav-link active" HREF="OB.php"> Zásielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="kontakt.php"> Kontakt</A>

</nav>


<body>


    <DIV class="hlavna ">



        <form method="post" action="ob.php">

            <br>
            <B><I>Odosielateľ: </I> </B>
            <p>
                <br>
                <div style="position: relative; top: -30px; left: 10px">
                    <b>Meno: </b> <input type="text" name="menoo" id="menoo" value="<?php echo $menoo;?>" placeholder="Meno odosielateľa">
                    <span class="error">* <?php echo $menooErr;?></span>

                    <b>Priezvisko: </b> <input type="text" name="priezo" id="priezo" value="<?php echo $priezo;?>" placeholder="Priezvisko odosielateľa">
                    <span class="error">* <?php echo $priezoErr;?></span>
                </div>
                <br>
                <B> <I>Adresát:</I> </B>
            <p>
                <br>
                <div style="position: relative; top: -30px; left: 10px">
                    <b>Meno: </b> <input type="text" name="menoa" id="menoa" value="<?php echo $menoa;?>" placeholder="Meno adresáta">
                    <span class="error">* <?php echo $menoaErr;?></span>

                    <b>Priezvisko: </b> <input type="text" name="prieza" id="prieza" value="<?php echo $prieza;?>" placeholder="Priezvisko adresáta">
                    <span class="error">* <?php echo $priezaErr;?></span>
                </div>

                <B> <I>Adresa zásielky: </I> </B>
            <p>
                <br>
                <div style="position: relative; top: -30px; left: 100px">
                    <b>Ulica: </b>  <input type="text" name="ulica" id="ulica" value="<?php echo $ulica;?>" placeholder="Ulica"> <span class="error">* <?php echo $ulicaErr;?></span>  <b>Číslo domu: </b>  <input type="number" name="cd" id="cd" value="<?php echo $cd;?>" placeholder="Číslo domu"><span class="error">* <?php echo $cdErr;?></span>
                </div>
                <div style="position: relative; top: -30px; left:100px;">
                    <b>Obec/Mesto: </b>  <input type="text" name="obec" id="obec" value="<?php echo $obec;?>" placeholder="Mesto"> <span class="error">* <?php echo $obecErr;?></span>  <b>Psč: </b>  <input type="number" name="psc" id="psc" value="<?php echo $psc;?>" placeholder="Psč">
                </div>

                <div style="position: relative; top: -30px;  left:100px;">
                    <b>Štát:</b> <input type="text" name="stat" id=" stat" value="<?php echo $stat;?>" placeholder="Štát"><span class="error">* <?php echo $statErr;?></span>
                    <br>
                </div>
                <div style="position: relative; top: -30px; left:10px">
                    <b>Druh zásielky:</b> <input type="text" name="druh" id="druh" value="<?php echo $druh;?>" placeholder="Druh zásielky"><span class="error">* <?php echo $druhErr;?></span>
                    <b>Cena:</b> <input type="text" name="cena" id="cena" value="<?php echo $cena;?>" placeholder="Cena"> <span class="error">* <?php echo $cenaErr;?></span>
                </div>

                <center>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" value="Odoslať"> Odoslať </button>
                </center>
        </form>        <?php $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "projekt";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        //pripojenie sa na databazu
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
        $sql = "INSERT INTO ob (menoo, priezo, menoa, prieza, ulica, cd, obec, psc, stat, druh, cena)
        VALUES ('$menoo','$priezo','$menoa','$prieza','$ulica','$cd','$obec','$psc','$stat','$druh','$cena')";
        if($conn->query($sql) === true  ){
        echo "";
        }
        else
        {
        echo "Error" . $sql . "<br/>" . $conn->error;
        }
        $conn->close();
        ?>        <?php
        $menooErr = $priezoErr = $menoaErr = $priezaErr = $ulicaErr =$cdErr =$obecErr =$pscErr =$statErr =$druhErr = $cenaErr  = "";
        $menoo = $prieza = $menoa = $prieza = $ulica = $cd = $obec = $psc = $stat = $druh = $cena = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["menoo"])) {
        $menooErr = "Meno je potrebné";
        } else {
        $menoo = test_input($_POST["menoo"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$menoo)) {
        $menooErr = "Povolené sú len písmená a medzery";
        }
        }
        if (empty($_POST["priezo"])) {
        $priezoErr = "Priezvisko je potrebné";
        } else {
        $priezo = test_input($_POST["priezo"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$priezo)) {
        $priezoErr = "Povolené sú len písmená a medzery";
        }
        }
        if (empty($_POST["menoa"])) {
        $menoaErr = "Meno je potrebné";
        } else {
        $menoa = test_input($_POST["menoa"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$menoa)) {
        $menoaErr = "Povolené sú len písmená a medzery";
        }
        }
        if (empty($_POST["prieza"])) {
        $priezaErr = "Priezvisko je potrebné";
        } else {
        $prieza = test_input($_POST["prieza"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$prieza)) {
        $priezaErr = "Povolené sú len písmená a medzery";
        }
        }
        if (empty($_POST["ulica"])) {
        $ulicaErr = "Ulica je potrebná";
        } else {
        $ulica = test_input($_POST["ulica"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$ulica)) {
        $ulicaErr = "Povolené sú len písmená a medzery";
        }
        }
        if (empty($_POST["cd"])) {
        $cdErr = "Číslo je potrebn�";
        } else {
        $cd = test_input($_POST["cd"]);
        if (!preg_match("/^[0-9]*$/",$cd)) {
        $cdErr = "Povolené sú len čísla";
        }
        }
        if (empty($_POST["obec"])) {
        $obecErr = "Obec je potrebná";
        } else {
        $obec = test_input($_POST["obec"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$obec)) {
        $obecErr = "Povolené sú len písmená a medzery";
        }
        }
        if (empty($_POST["psc"])) {
        $pscErr = "Psč je potrebné";
        } else {
        $psc = test_input($_POST["psc"]);
        if (!preg_match("/^[0-9 ]*$/",$psc)) {
        $pscErr = "Povolené sú len čísla a medzery";
        }
        }
        if (empty($_POST["stat"])) {
        $statErr = "Štát je potrebný";
        } else {
        $stat = test_input($_POST["stat"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$stat)) {
        $statErr = "Povolené sú len písmená a medzery";
        }
        }
        if (empty($_POST["druh"])) {
        $druhErr = "Druh je potrebný";
        } else {
        $druh = test_input($_POST["druh"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$druh)) {
        $druhErr = "Povolené sú len písmená a medzery";
        }
        }
        if (empty($_POST["cena"])) {
        $cenaErr = "Cena je potrebná";
        } else {
        $cena = test_input($_POST["cena"]);
        if (!preg_match("/^[0-9,]*$/",$cena)) {
        $cenaErr = "Povolené sú len čísla a znak ,";
        }
        }
        }
        function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        echo "<h2>Tvoje vložené informácie:</h2>";
        if (!preg_match("/^[a-zA-Z ]*$/",$menoo)) {
        $menooErr = "Povolené sú len písmená a medzery";
        } else {echo $menoo;}
        echo " ";
        if (!preg_match("/^[a-zA-Z ]*$/",$priezo)) {
        $priezoErr = "Povolené sú len písmená a medzery";
        } else {echo $priezo;}
        echo "<br>";
        if (!preg_match("/^[a-zA-Z ]*$/",$menoa)) {
        $menoaErr = "Povolené sú len písmená a medzery";
        } else {echo $menoa;}
        echo " ";
        if (!preg_match("/^[a-zA-Z ]*$/",$prieza)) {
        $priezaErr = "Povolené sú len písmená a medzery";
        } else {echo $prieza;}
        echo "<br>";
        if (!preg_match("/^[a-zA-Z ]*$/",$ulica)) {
        $ulicaErr = "Povolené sú len písmená a medzery";
        } else {echo $ulica;}
        echo " ";
        if (!preg_match("/^[0-9]*$/",$cd)) {
        $cdErr = "Povolen� s� len ��sla";
        } else {echo $cd;}
        echo "<br>";
        if (!preg_match("/^[a-zA-Z ]*$/",$obec)) {
        $obec = "Povolené sú len písmená a medzery";
        } else {echo $obec;}
        echo "<br>";
        if (!preg_match("/^[0-9 ]*$/",$psc)) {
        $pscErr = "Povolené sú len čísla a medzery";
        } else {echo $psc;}
        echo "<br>";
        if (!preg_match("/^[a-zA-Z ]*$/",$stat)) {
        $statErr = "Povolené sú len písmená a medzery";
        } else {echo $stat;}
        echo "<br>";
        if (!preg_match("/^[a-zA-Z ]*$/",$druh)) {
        $druhErr = "Povolené sú len písmená a medzery";
        } else {echo $druh;}
        echo " ";
        if (!preg_match("/^[0-9. ]*$/",$cena)) {
        $cenaErr = "Povolené sú len čísla a .";
        } else {echo $cena;}
        echo "€";
        ?>
        <a href="conn.php">
            sledovacie
        </a>





    </DIV>

    <button type="submit" name="submit" class="btn btn-primary" value="Späť" onclick="history.back(-1)">
        Späť
    </button>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<footer>

    Tímea Mokošáková, 2018

</footer>

</html>