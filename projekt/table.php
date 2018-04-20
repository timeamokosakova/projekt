
<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Doručovacia služba</title>
</head>




<nav class="nav nav-pills nav-fill flex-column flex-sm-row " table-md>

    <a class="nav-item  flex-sm-fill text-sm-center nav-link" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class="nav-item  flex-sm-fill text-sm-center nav-link  " HREF="ospol.php"> O spoločnosti</A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link " HREF="OB.php"> Zásielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link active" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="kontakt.php"> Kontakt</A>

</nav>

<body>



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
    if(!$conn->set_charset ("utf8")){
        echo ( $conn->error);
        exit();
    }
    // Attempt select query execution
    $sql = "SELECT * FROM ob";
    if($result = $conn->query($sql)){
        if($result->num_rows > 0){
        }
        else{
            echo "ERROR: $sql. " . $conn->error;
        }
    }
    $conn->close();
    ?>

  




    <div ="container">
        <table class="table table-bordered table-md">
            <thead>
                <tr>
                    <th class="header" bgcolor="#0086b3">Sledovacie číslo</th>
                    <th class="header" bgcolor="#0086b3">Meno</th>
                    <th class="header" bgcolor="#0086b3">Priezvisko</th>
                    <th class="header" bgcolor="#0086b3">Stav</th>
                    <th class="header" bgcolor="#0086b3">Zmena</th>
                </tr>
            </thead>

            <tbody><?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>

                    <td bgcolor="#e6edf2"> <?php echo $row["id"] ?></td>
                    <td bgcolor="#e6edf2"><?php echo $row["menoa"] ?></td>
                    <td bgcolor="#e6edf2"><?php echo $row["prieza"] ?></td>
                    <td bgcolor="#e6edf2"><?php echo $row["stav"] ?></td>
                    <td bgcolor="#e6edf2"> <a href="Update.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zmena</a> </td>
                </tr><?php } ?>
            </tbody>

        </table>

    </div>


  
