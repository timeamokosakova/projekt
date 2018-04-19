



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


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <div ="container">
        <table class="table table-bordered table-md">
            <thead>
                <tr>
                    <th class="header"bgcolor="#0086b3" >Sledovacie číslo</th>
                    <th class="header" bgcolor="#0086b3">Meno</th>
                    <th class="header" bgcolor="#0086b3">priezvisko</th>
                    <th class="header" bgcolor="#0086b3">Stav</th>
                </tr>
            </thead>

            <tbody><?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>

                    <td bgcolor="#e6edf2" > <?php echo $row["id"] ?></td>
                    <td bgcolor="#e6edf2"><?php echo $row["menoa"] ?></td>
                    <td bgcolor="#e6edf2"><?php echo $row["prieza"] ?></td>
                    <td bgcolor="#e6edf2"><?php echo $row["stav"] ?></td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
      
    </div>
    </div>