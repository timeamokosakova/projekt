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

    <?php
    if(isset($_POST["submit"])){
        $mysqli = new mysqli("localhost", "root", "", "projekt");
        
        // Check connection
        if($mysqli === false){
            die("ERROR: Could not connect. " . $mysqli->connect_error);
        }
        
       
        $stav= mysqli_real_escape_string($conn, $_POST['stav']);
        
        // Attempt update query execution
        $sql = "UPDATE ob SET stav='$stav' ";
        if($mysqli->query($sql) === true){
            echo "Records were updated successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
        }
        
        // Close connection
        $mysqli->close();
    }
    ?>

    <DIV class="hlavna">
        <form action="update.php" method="post">
            Sledovacie číslo,ktoré ideme aktualizovať:
            <br>
            <input type="number" name="id" required id="id" 
                   placeholder="Sledovacie číslo">
            <br />
            <br />

            Nový stav:
            <br>
            <input type="text" name="stav" required id="stav" value="<?php echo $stav; ?>" placeholder="Stav">
            <br />


            <button type="submit" class="btn btn-primary" data-toggle="modal" value="update"> Odoslané </button>
        </form>

        <br>


            <?php
            /* Attempt MySQL server connection. Assuming you are running MySQL
            server with default setting (user 'root' with no password) */
            $mysqli = new mysqli("localhost", "root", "", "projekt");
            
            // Check connection
            if($mysqli === false){
                die("ERROR: Could not connect. " . $mysqli->connect_error);
            }
            
            // Attempt select query execution
            $sql = "SELECT * FROM ob";
            if($result = $mysqli->query($sql)){
                if($result->num_rows > 0){
                    echo "<table>";
                    echo "<tr>";
                    echo "<th>Sledovacie číslo </th>";
                    echo "<th>Meno adresáta </th>";
                    echo "<th>Priezvisko adresáta </th>";
                    echo "<th>Stav objednávky</th>";
                    echo "</tr>";
                    while($row = $result->fetch_array()){
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['menoa'] . "</td>";
                        echo "<td>" . $row['prieza'] . "</td>";
                        echo "<td>" . $row['stav'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                    // Free result set
                    $result->free();
                } else{
                    echo "No records matching your query were found.";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
            }
            
            // Close connection
            $mysqli->close();
            ?>


    </DIV><?php include('pages/foot.php') ?>
