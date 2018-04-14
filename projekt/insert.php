<?php
//include  'conn.php';

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


$sql = "INSERT INTO ob (menoo, priezo, menoa, prieza, ulica, cd, obec, psc, stat, druh, cena)
    VALUES ('$menoo','$priezo','$menoa','$prieza','$ulica','$cd','$obec','$psc','$stat','$druh','$cena')";

$menooErr = $priezoErr = $menoaErr = $priezaErr = $ulicaErr =$cdErr =$obecErr =$pscErr =$statErr =$druhErr = $cenaErr  = "";
$menoo = $prieza = $menoa = $prieza = $ulica = $cd = $obec = $psc = $stat = $druh = $cena = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["menoo"])) {
        $menooErr = "Meno je potrebné";
    } else {
        $menoo = test_input($_POST["menoo"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$menoo)) {
            $menooErr = "Povolené sú len písmená a medzery";
        }
    }
    if (empty($_POST["priezo"])) {
        $priezoErr = "Priezvisko je potrebné";
    } else {
        $priezo = test_input($_POST["priezo"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$priezo)) {
            $priezoErr = "Povolené sú len písmená a medzery";
        }
    }
    if (empty($_POST["menoa"])) {
        $menoaErr = "Meno je potrebné";
    } else {
        $menoa = test_input($_POST["menoa"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$menoa)) {
            $menoaErr = "Povolené sú len písmená a medzery";
        }
    }
    if (empty($_POST["prieza"])) {
        $priezaErr = "Priezvisko je potrebné";
    } else {
        $prieza = test_input($_POST["prieza"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$prieza)) {
            $priezaErr = "Povolené sú len písmená a medzery";
        }
    }
    if (empty($_POST["ulica"])) {
        $ulicaErr = "Ulica je potrebná";
    } else {
        $ulica = test_input($_POST["ulica"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$ulica)) {
            $ulicaErr = "Povolené sú len písmená a medzery";
        }
    }
    if (empty($_POST["cd"])) {
        $cdErr = "Číslo je potrebn�";
    } else {
        $cd = test_input($_POST["cd"]);
        if (!preg_match("/^[0-9]*$/",$cd)) {
            $cdErr = "Povolené sú len čísla";
        }
    }
    if (empty($_POST["obec"])) {
        $obecErr = "Obec je potrebná";
    } else {
        $obec = test_input($_POST["obec"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$obec)) {
            $obecErr = "Povolené sú len písmená a medzery";
        }
    }
    if (empty($_POST["psc"])) {
        $pscErr = "Psč je potrebné";
    } else {
        $psc = test_input($_POST["psc"]);
        if (!preg_match("/^[0-9 ]*$/",$psc)) {
            $pscErr = "Povolené sú len čísla a medzery";
        }
    }
    if (empty($_POST["stat"])) {
        $statErr = "Štát je potrebný";
    } else {
        $stat = test_input($_POST["stat"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$stat)) {
            $statErr = "Povolené sú len písmená a medzery";
        }
    }
    if (empty($_POST["druh"])) {
        $druhErr = "Druh je potrebný";
    } else {
        $druh = test_input($_POST["druh"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$druh)) {
            $druhErr = "Povolené sú len písmená a medzery";
        }
    }
    if (empty($_POST["cena"])) {
        $cenaErr = "Cena je potrebná";
    } else {
        $cena = test_input($_POST["cena"]);
        if (!preg_match("/^[0-9,]*$/",$cena)) {
            $cenaErr = "Povolené sú len čísla a znak ,";
        }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>