<?php
session_start();

//Mechanizmus, ktorý umožňuje odovzdávať identifikáciu session
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$message="";

if(!$conn->set_charset ("utf8")){
    echo ( $conn->error);
    exit();
}


if(!empty($_POST["Prihlásenie"])) {
$result = mysqli_query($conn,"SELECT * FROM login WHERE user='" . $_POST["user"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
} else {
$message = "Neplatné heslo!";
}
}
if(!empty($_POST["Odhlásenie"])) {
$_SESSION["id"] = "";
session_destroy();
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


    <link rel="stylesheet" href="css/log.css">



    <center>
        <div>
            <div style="display:block;margin:0px auto;"><?php if(empty($_SESSION["id"])) { ?>
                <form action="" method="post" id="frmLogin">
                    <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
                    <div class="field-group">
                        <div><label for="login">Meno</label></div>
                        <div><input name="user" type="text" class="input-field"></div>
                    </div>
                    <div class="field-group">
                        <div><label for="password">Heslo</label></div>
                        <div><input name="password" type="password" class="input-field"> </div>
                    </div>
                    <div class="field-group">
                        <div><input type="submit" name="Prihlásenie" value="Prihlásenie" class="form-submit-button"></span></div>
                    </div>
                </form>
            </div>
        </div><?php
    } else {
    $result = mysqli_query($conn,"SELECT * FROM login WHERE id='" . $_SESSION["id"] . "'");
    $row  = mysqli_fetch_array($result);
    ?>

        <form action="" method="post" id="frmLogout">

            <div class="tlacidla"><?php echo ucwords($row['display_name']); ?>
                <input type="submit" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" name="Odhlásenie" value="Odhlásenie">
                <a href="table.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Zmena</a>

            </div>

        </form>
        
    </center>
        </div>
        </DIV><?php } ?>



        </div>


    </center>
    
    
  
