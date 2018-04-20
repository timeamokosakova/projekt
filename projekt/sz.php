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
    <A class="nav-item flex-sm-fill text-sm-center nav-link " HREF="OB.php"> Zásielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link active" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link"   HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link"   HREF="kontakt.php"> Kontakt</A>

</nav>

<body>

    <DIV class="hlavna">
        <br>
        Sledujte svoju zásielku kedykoľvek on-line: musíte len jednoducho zadať číslo. Informácie Track & Trace predstavujú podrobné údaje o stave doručenia a naposledy uskutočnenej operácii.
        <form method="post" action="sz.php">

            <div class="form-group row">
                <label for="Stav" class="col-sm-2 col-form-label"> Stav:  </label>
            </div>

            <div class="form-group">
                <label for="menoo">Sledovacie číslo </label>
                <input type="text" class="form-control" required id="id" name="id" placeholder="Číslo">
            </div>

            <center>
                <button type="submit" class="btn btn-primary" required id="submit" data-toggle="modal" name="submit" value="submit"> Odoslať </button>
            </center>          
            
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


            $id = mysqli_real_escape_string($conn, $_POST['id']);
            $sql = "SELECT stav  FROM ob  WHERE `id` = $id";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            echo "Vaša objednávka sa nachádza v stave -   " . $row["stav"].  ".<br>";
            }
            } else {
            echo "Sledovacie číslo nie je v zozname, objednávka bola buď doručená alebo neexistuje.";
            }
            $conn->close();
            }
            ?>



    
    <?php include('pages/foot.php') ?>
