
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
      //pripojenie sa na databazu
      $menoo = mysqli_real_escape_string($conn, $_POST['menoo']);
      $priezo = mysqli_real_escape_string($conn, $_POST['priezo']);
      $menoa = mysqli_real_escape_string($conn, $_POST['menoa']);
      $prieza = mysqli_real_escape_string($conn, $_POST['prieza']);
      $ulica = mysqli_real_escape_string($conn, $_POST['ulica']);
      $cd = mysqli_real_escape_string($conn, $_POST['cd']);
      $obec = mysqli_real_escape_string($conn, $_POST['obec']);
      $psc = mysqli_real_escape_string($conn, $_POST['psc']);
      $stat = mysqli_real_escape_string($conn, $_POST['stat']);
      $druh = mysqli_real_escape_string($conn, $_POST['druh']);
      $cena = mysqli_real_escape_string($conn, $_POST['cena']);
      $stav = mysqli_real_escape_string($conn, $_POST['stav']);
      $sql = "INSERT INTO ob (menoo, priezo, menoa, prieza, ulica, cd, obec, psc, stat, druh, cena, stav)
        VALUES ('$menoo','$priezo','$menoa','$prieza','$ulica','$cd','$obec','$psc','$stat','$druh','$cena','Spracovane')";
      
      if($conn->query($sql) === true  ){
          echo "problém";
      }
      else
      {
          echo "Error" . $sql . "<br/>" . $conn->error;
      }
      $conn->close();
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
    <img src="log.JPG" style="width:10%;height:40px">
</a>

<nav class="nav nav-pills nav-fill flex-column flex-sm-row">

    <a class="nav-item flex-sm-fill text-sm-center nav-link disabled" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class=" nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="ospol.php"> O spoločnosti</A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link active" HREF="OB.php"> Zásielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link disabled" HREF="kontakt.php"> Kontakt</A>

</nav>


<body>


    <DIV class="hlavna ">
        <div class="form-group row">


            <form method="post" action="ob.php">
                <table>

                    <tr>
                        <br>


                        <td>  <B><I>Odosielateľ: </I> </B> </td>
                        <br>
                        <td>
                            <div style="position: relative; top: -30px; left: 10px">
                                <b>Meno: </b> <input type="text" name="menoo" id="menoo" value="<?php echo $menoo;?>" placeholder="Meno odosielateľa">


                                <b>Priezvisko: </b> <input type="text" name="priezo" id="priezo" value="<?php echo $priezo;?>" placeholder="Priezvisko odosielateľa">

                            </div>
                        </td>
                    </tr>


                    <br>

                    <tr>
                        <td><B> <I>Adresát:</I> </B></td>
                        <br>
                        <td>
                            <div style="position: relative; top: -30px; left: 10px">
                                <b>Meno: </b> <input type="text" name="menoa" id="menoa" value="<?php echo $menoa;?>" placeholder="Meno adresáta">


                                <b>Priezvisko: </b> <input type="text" name="prieza" id="prieza" value="<?php echo $prieza;?>" placeholder="Priezvisko adresáta">

                            </div>
                        </td>
                    


                    <tr>
                        <td>  <B> <I>Adresa zásielky: </I> </B> </td>

                        <td>
                            <div style="position: relative; top: -30px; left: 100px">
                                <b>Ulica: </b>  <input type="text" name="ulica" id="ulica" value="<?php echo $ulica;?>" placeholder="Ulica">   <b>Číslo domu: </b>  <input type="number" name="cd" id="cd" value="<?php echo $cd;?>" placeholder="Číslo domu">
                            </div>
                        </td>

                


                    <tr>
                        <td>
                            <div style="position: relative; top: -30px; left:100px;">
                                <b>Obec/Mesto: </b>  <input type="text" name="obec" id="obec" value="<?php echo $obec;?>" placeholder="Mesto">   <b>Psč: </b>  <input type="number" name="psc" id="psc" value="<?php echo $psc;?>" placeholder="Psč">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div style="position: relative; top: -30px;  left:100px;">
                                <b>Štát:</b> <input type="text" name="stat" id=" stat" value="<?php echo $stat;?>" placeholder="Štát">
                                <br>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div style="position: relative; top: -30px; left:10px">
                                <b>Druh zásielky:</b> <input type="text" name="druh" id="druh" value="<?php echo $druh;?>" placeholder="Druh zásielky">
                                <b>Cena:</b> <input type="text" name="cena" id="cena" value="<?php echo $cena;?>" placeholder="Cena">
                            </div>
                        </td>
                    </tr>
                 </tr>
                </table>
                <center>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" value="Odoslať"> Odoslať </button>
                </center>
            </form>

        </div>

        <a href="conn.php">
            sledovacie
        </a>

        <button type="submit" name="submit" class="btn btn-primary" value="Späť" onclick="history.back(-1)">
            Späť
        </button>


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<footer>

    Tímea Mokošáková, 2018

</footer>

</html>

