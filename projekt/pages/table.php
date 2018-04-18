



<?php
$mysqli = new mysqli("localhost", "root", "", "projekt");
// Check connection
if($mysqli === false){
die("ERROR: Could not connect. " . $mysqli->connect_error);
}
// Attempt select query execution
$sql = "SELECT * FROM ob";
if($result = $mysqli->query($sql)){
if($result->num_rows > 0){

while($row = $result->fetch_array())
    else{
echo "No records matching your query were found.";
}
} else{
echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

}
$mysqli->close();
?>


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <div ="container">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Sledovacie číslo</th>
                    <th scope="col">Meno</th>
                    <th scope="col">Priezvisko</th>
                    <th scope="col">Stav</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
      
                    <td bgcolor="#D1FFC2"><?php echo $row["id"] ?></td>
                    <td bgcolor="#D1FFC2"><?php echo $row["menoa"] ?></td>
                    <td bgcolor="#D1FFC2"><?php echo $row["prieza"] ?></td>
                    <td bgcolor="#D1FFC2"><?php echo $row["stav"] ?></td>
                </tr>


            </tbody>

        </table><?php } ?>
    </div>
    </div>