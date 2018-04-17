<?php include('pages/head.php') ?>

    <DIV class="hlavna">
        <br>
        Sledujte svoju zásielku kedykoľvek on-line: musíte len jednoducho zadať číslo. Informácie Track & Trace predstavujú podrobné údaje o stave doručenia a naposledy uskutočnenej operácii.
        <form method="post" action="sz.php">

            <div class="form-group row">
                <label for="Stav" class="col-sm-2 col-form-label"> Stav:  </label>
            </div>

            <div class="form-group">
                <label for="menoo">Sledovacie číslo </label>
                <input type="text" class="form-control" required id="id" name="id" placeholder="Číslo">
                <label for="Vaša zásielka je vstave: "><?php echo $stav ?> </label>
            </div>

            <center>
                <button type="submit" class="btn btn-primary" required id="submit" data-toggle="modal" name="submit" value="submit"> Odoslať </button>
            </center>
            
            
            <?php

            if(isset($_POST["submit"])){
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
                
                $sql = "SELECT stav  FROM ob  WHERE `id` = $id";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "Objednávka je:  " . $row["stav"].  "<br>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            }
    ?>


</DIV>

   <?php include('pages/foot.php') ?>
