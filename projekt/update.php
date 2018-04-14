<?php



if(isset($_POST['update']))
{

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

    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $stav = mysqli_real_escape_string($conn, $_POST['stav']);

    $query = "UPDATE `ob` SET `stav`='".$stav."' WHERE `id` = $id";
    $result = $conn->query($query);

    if($result)
    {
        echo 'Dáta sme aktualizovali';
    }else{
        echo 'Dáta neboli aktualizované';
    }
    $conn->close();
}

?>

<!DOCTYPE html>

<html>

<head>

    <title> Aktualizacia </title>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

    <form action="update.php" method="post">
        Sledovacie číslo,ktoré ideme aktualizovať:
        <input type="text" name="id" id="id" value="<?php echo $id;?> " placeholder="Sledovacie číslo">
        <br />
        <br />

        Nový stav:
        <input type="text" name="stav" id="stav" value="<?php echo $stav;?> " placeholder="Stav">
        <br />




        <input type="submit" name="update" value="Aktualizovať" />


        <a href="ez.php">
            <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px" />
        </a>
    </form>

</body>


</html>
