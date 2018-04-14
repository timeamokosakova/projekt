<?php $servername = "localhost";
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


    $sql = "SELECT `id`, `stav` FROM `ob` WHERE `id` = $id LIMIT 1";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {



        echo "<table border='7'><tr><th> Sledovacie ËÌslo </th><th>Stav</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["stav"]." </td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
$conn->close();


 <a href="index.php">
          sp‰ù
        </a>

?>
