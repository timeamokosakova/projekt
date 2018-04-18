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
         echo "<table>";
         echo "<tr>";
         echo "<th>Sledovacie èíslo </th>";
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


    </DIV>