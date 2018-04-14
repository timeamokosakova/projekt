<?php



if(isset($_POST['update']))
{

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "projekt";

    $conn = mysqli_connect($hostname, $username, $password, $databaseName);



    $id = $_POST['id'];
    $stav = $_POST['stav'];



    $query = "UPDATE `ob` SET `stav`='".$stav."' WHERE `id` = $id";

    $result = mysqli_query($conn, $query);

    if($result)
    {
        echo 'D�ta sme aktualizovali';
    }else{
        echo 'D�ta neboli aktualizovan�';
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
        Sledovacie ��slo,ktor� ideme aktualizova�:
        <input type="text" name="id" id="id" value="<?php echo $id;?> " placeholder="Sledovacie ��slo" />>
        <br />
        <br />

        Nov� stav:
        <input type="text" name="stav" id="stav" value="<?php echo $stav;?> " placeholder="Stav">
        <br />




        <input type="submit" name="update" value="Aktualizovať" />


        <a href="ez.php">
           Späť
        </a>
    </form>

</body>


</html>
