<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>DoruËovacia sluûba</title>
</head>


<a href="index.php">
    <img src="log.JPG" style="width:10%;height:40px">
</a>

<nav class="nav nav-pills nav-fill nav-fill">
    <a class="nav-item nav-link disabled" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class="nav-item nav-link disabled" HREF="ospol.php"> O spoloËnosti</A>
    <A class="nav-item nav-link active" HREF="OB.php"> Z·sielka</A>
    <A class="nav-item nav-link disabled" HREF="SZ.php"> Sledovanie z·sielok </A>
    <A class="nav-item nav-link disabled" HREF="EZ.php"> Spr·va z·sielok</A>
    <A class="nav-item nav-link disabled" HREF="kontakt.php"> Kontakt</A>
</nav>


<body>
    
   
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



      $sql = "INSERT INTO ob (menoo, priezo, menoa, prieza, ulica, cd, obec, psc, stat, druh, cena )
VALUES ('', '', ' ', '', '', '', '','','','','')";

  
      
    $menooErr = $priezoErr = $menoaErr = $priezaErr = $ulicaErr =$cdErr =$obecErr =$pscErr =$statErr =$druhErr = $cenaErr  = "";
    $menoo = $prieza = $menoa = $prieza = $ulica = $cd = $obec = $psc = $stat = $druh = $cena = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["menoo"])) {
            $menooErr = "Meno je potrebnÈ";
        } else {
            $menoo = test_input($_POST["menoo"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$menoo)) {
                $menooErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
            }
        }
        
        if (empty($_POST["priezo"])) {
            $priezoErr = "Priezvisko je potrebnÈ";
        } else {
            $priezo = test_input($_POST["priezo"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$priezo)) {
                $priezoErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
            }
        }

        if (empty($_POST["menoa"])) {
            $menoaErr = "Meno je potrebnÈ";
        } else {
            $menoa = test_input($_POST["menoa"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$menoa)) {
                $menoaErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
            }
        }

        if (empty($_POST["prieza"])) {
            $priezaErr = "Priezvisko je potrebnÈ";
        } else {
            $prieza = test_input($_POST["prieza"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$prieza)) {
                $priezaErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
            }
        }
        if (empty($_POST["ulica"])) {
            $ulicaErr = "Ulica je potrebn·";
        } else {
            $ulica = test_input($_POST["ulica"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$ulica)) {
                $ulicaErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
            }
        }
        if (empty($_POST["cd"])) {
            $cdErr = "»Ìslo je potrebnÈ";
        } else {
            $cd = test_input($_POST["cd"]);
            if (!preg_match("/^[0-9]*$/",$cd)) {
                $cdErr = "PovolenÈ s˙ len ËÌsla"; 
            }
        }
        if (empty($_POST["obec"])) {
            $obecErr = "Obec je potrebn·";
        } else {
            $obec = test_input($_POST["obec"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$obec)) {
                $obecErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
            }
        }

        if (empty($_POST["psc"])) {
            $pscErr = "PsË je potrebn·";
        } else {
            $psc = test_input($_POST["psc"]);
            if (!preg_match("/^[0-9 ]*$/",$psc)) {
                $pscErr = "PovolenÈ s˙ len ËÌsla a medzery"; 
            }
        }

       
        if (empty($_POST["stat"])) {
            $statErr = "ät·t je potrebn˝";
        } else {
            $stat = test_input($_POST["stat"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$stat)) {
                $statErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
            }
        }

        if (empty($_POST["druh"])) {
            $druhErr = "Druh je potrebn˝";
        } else {
            $druh = test_input($_POST["druh"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$druh)) {
                $druhErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
            }
        }


        if (empty($_POST["cena"])) {
            $cenaErr = "Cena je potrebn·";
        } else {
            $cena = test_input($_POST["cena"]);
            if (!preg_match("/^[0-9,]*$/",$cena)) {
                $cenaErr = "PovolenÈ s˙ len ËÌsla a znak ,"; 
            }
        }


    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } 

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); 
    ?>

   
  <DIV class="hlavna">

     
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
            <br>
            <B><I>Odosielateæ: </I> </B>
            <p>

                <div style="position: relative; top: -30px; left: 10px">
                    <b>Meno: </b> <input type="text" name="menoo" value="<?php echo $menoo;?>">
                    <span class="error">* <?php echo $menooErr;?></span>

                    <b>Priezvisko: </b> <input type="text" name="priezo" value="<?php echo $priezo;?>">
                    <span class="error">* <?php echo $priezoErr;?></span>
                </div>

                <B> <I>Adres·t:</I> </B>
            <p>
                <div style="position: relative; top: -30px; left: 10px">
                    <b>Meno: </b> <input type="text" name="menoa" value="<?php echo $menoa;?>">
                    <span class="error">* <?php echo $menoaErr;?></span>

                    <b>Priezvisko: </b> <input type="text" name="prieza" value="<?php echo $prieza;?>">
                    <span class="error">* <?php echo $priezaErr;?></span>
                </div>

                <B> <I>Adresa z·sielky: </I> </B>
            <p>
                <div style="position: relative; top: -30px; left: 100px">
                    <b>Ulica: </b>  <input type="text" name="ulica"  value="<?php echo $ulica;?>"> <span class="error">* <?php echo $ulicaErr;?></span> <b>»Ìslo domu: </b>  <input type="number" name="cd" value="<?php echo $cd;?>"> <span class="error">* <?php echo $cdErr;?></span>
                </div>
                <div style="position: relative; top: -30px; left:100px;">
                    <b>Obec/Mesto: </b>  <input type="text" name="obec" value="<?php echo $obec;?>">  <span class="error">* <?php echo $obecErr;?></span> <b>PsË: </b>  <input type="number" name="psc" value="<?php echo $psc;?>"> <span class="error">* <?php echo $pscErr;?></span>
                </div>

                <div style="position: relative; top: -30px;  left:100px;">
                    <b>ät·t:</b> <input type="text" name="stat" value="<?php echo $stat;?>">  <span class="error">* <?php echo $statErr;?></span>
                    <br>
                </div>
                <div style="position: relative; top: -30px; left:10px">
                    <b>Druh z·sielky:</b> <input type="text" name="druh" value="<?php echo $druh;?>">  <span class="error">* <?php echo $druhErr;?></span>
                    <b>Cena:</b> <input type="text" name="cena"  value="<?php echo $cena;?>">  <span class="error">* <?php echo $cenaErr;?></span>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary" data-toggle="modal" value="Odoslaù"°> Odoslaù </button>
                </center>
        </form>
     


        <?php
 
        echo "<h2>Tvoje vloûenÈ inform·cie:</h2>";

        if (!preg_match("/^[a-zA-Z ]*$/",$menoo)) {
            $menooErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
        } else {echo $menoo;}
       echo " ";
        
        if (!preg_match("/^[a-zA-Z ]*$/",$priezo)) {
            $priezoErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
        } else {echo $priezo;}
        echo "<br>";

          if (!preg_match("/^[a-zA-Z ]*$/",$menoa)) {
            $menoaErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
        } else {echo $menoa;}
        echo " ";

              if (!preg_match("/^[a-zA-Z ]*$/",$prieza)) {
            $priezaErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
        } else {echo $prieza;}
        echo "<br>";

              if (!preg_match("/^[a-zA-Z ]*$/",$ulica)) {
            $ulicaErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
        } else {echo $ulica;}
        echo " ";

              if (!preg_match("/^[0-9]*$/",$cd)) {
            $cdErr = "PovolenÈ s˙ len ËÌsla"; 
        } else {echo $cd;}
        echo "<br>";

        if (!preg_match("/^[a-zA-Z ]*$/",$obec)) {
            $obec = "PovolenÈ s˙ len pÌsmen· a medzery"; 
        } else {echo $obec;}
        echo "<br>";


        if (!preg_match("/^[0-9 ]*$/",$psc)) {
            $pscErr = "PovolenÈ s˙ len ËÌsla a medzery"; 
        } else {echo $psc;}
        echo "<br>";


        if (!preg_match("/^[a-zA-Z ]*$/",$stat)) {
            $statErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
        } else {echo $stat;}
        echo "<br>";


        if (!preg_match("/^[a-zA-Z ]*$/",$druh)) {
            $druhErr = "PovolenÈ s˙ len pÌsmen· a medzery"; 
        } else {echo $druh;}
        echo " ";


        if (!preg_match("/^[0-9, ]*$/",$cena)) {
            $cenaErr = "PovolenÈ s˙ len ËÌsla a ,"; 
        } else {echo $cena;}
        echo "Ä";
        ?>

  
 
    </DIV>
    


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

<p style="font-size:small; text-align:center"> TÌmea Mokoö·kov·, 2018</style>
</html>