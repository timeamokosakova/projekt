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



    $query = "UPDATE `ob` SET `stav`='".$stav."', WHERE `id` = $id";

    $result = mysqli_query($connect, $query);

    if($result)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
    }
    $conn->close();
}

?>

<!DOCTYPE html>

<html>

<head>

    <title> PHP UPDATE DATA </title>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>

    <form action="update.php" method="post">
        ID To Update:
        <input type="text" name="id" required />
        <br />
        <br />

        New First stav:
        <input type="text" name="stav" id ="stav" value="<?php echo $stav;?> " required />
        <br />
    
         
       

        <input type="submit" name="update" value="Aktualizova" />

    </form>

</body>


</html>
