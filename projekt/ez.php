<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Doruèovacia služba</title>
</head>

<a href="index.php">
    <img src="log.JPG" style="width:10%;height:40px">
</a>

<---->použi session</---->

<nav class="nav nav-pills nav-fill nav-fill">

    <a class="nav-item nav-link disabled" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class="nav-item nav-link disabled" HREF="ospol.php"> O spoloènosti</A>
    <A class="nav-item nav-link disabled" HREF="OB.php"> Zásielka </A>
    <A class="nav-item nav-link disabled" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item nav-link active" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item nav-link disabled" HREF="kontakt.php"> Kontakt</A>

</nav>

<body>
    <DIV class="hlavna">

        <?php
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

        echo "<br>";
        ?>

        <form action="ez.php" method="post" enctype="text/plain">

            <br>
            <div style="position: relative; top: -30px; left: 10px">
                <b>Meno: </b><input type="text" name="meno">
                <b>Priezvisko:</b> <input type="text" name="priez">
                <br>
            </div>

            <div style="position: relative; top: -30px; left: 10px">
                <b>Ulica: </b>  <input type="text" name="ulica">  <b>Èíslo domu: </b>  <input type="number" name="cislo">
            </div>

            <div style="position: relative; top: -30px; left:10px;">
                <b>Obec/Mesto: </b>  <input type="text" name="mesto">  <b>Psè: </b>  <input type="number" name="psc">
            </div>

            <div style="position: relative; top: -30px;  left:10px;">
                <b>Okres: </b>  <input type="text" name="okres">
                <br>
                <b>Kraj: </b>  <input type="text" name="kraj">
                <br>
                <b>Štát:</b> <input type="text" name="stat">
            </div>
            <center>
                <input type="submit" value="Potvrdi">
                <br>
            </center>

    </DIV>
    </form>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>



<p style="font-size:small; text-align:center;"> Tímea Mokošáková, 2018</style>
</html>