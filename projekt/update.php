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



<nav class="nav nav-pills nav-fill flex-column flex-sm-row " table-md>

    <a class="nav-item  flex-sm-fill text-sm-center nav-link" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class="nav-item  flex-sm-fill text-sm-center nav-link  " HREF="ospol.php"> O spoločnosti</A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link " HREF="OB.php"> Zásielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link active" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="kontakt.php"> Kontakt</A>

</nav>

<body>   


    <DIV class="hlavna" >
        <form action="update.php" method="post">
            Sledovacie číslo,ktoré ideme aktualizovať:
            <br>
            <input type="number" name="id" required id="id" value="<?php $_POST['id']?>"   placeholder="Sledovacie číslo">
            <br />
            <br />

            Nový stav:
            <br>
            <input type="text" name="stav" required id="stav" value="<?php $_POST['stav']?>"   placeholder="Stav">
            <br />


            <button type="submit" class="btn btn-primary" data-toggle="modal"> Odoslané </button>  <a href="table.php" class="btn btn-primary" data-toggle="modal role="button" aria-pressed="true">Späť</a>
        </form>  
        </DIV>
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
        //písmo
        if(!$conn->set_charset ("utf8")){
            echo ( $conn->error);
            exit();
        }
        
        $id = mysqli_real_escape_string($conn, $_POST['id']);
        $stav = mysqli_real_escape_string($conn, $_POST['stav']);
        
        if(isset($_POST['submit'])){
            $sql = "UPDATE ob SET stav='$stav' WHERE id=$id";
            if($conn->query($sql) === true  ){
                
                echo " pridané ";
            }
            else
            {
                echo "Error <br/>" . $conn->error;
            }
            $conn->close();
        }
        ?>
        
       
      
    
  
 </div>
    <?php include('pages/foot.php') ?>