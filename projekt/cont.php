<?php



if  (isset($_POST["name"]) && isset ($_POST["email"]) && isset ($_POST["text"])) {
$name = $_POST["name"];
$email = $_POST["email"];
$text = $_POST["text"];
if (!empty($name) || !empty($email) || !empty ($text))
{
$to = "timea.mokosakova@gmail.com";
$subject = "Kontaktný formulár";
$body = $name. "\n" .$text;
$headers = "From: ".$email ;
if(mail($to,$subject, $body, $headers)){
echo "Vďaka za kontaktovanie";
} else {  echo "Error"; }
} else {  echo "Položky sú prázdne";  }
}
?>

<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Doručovacia služba</title>
</head>




<nav class="nav nav-pills nav-fill flex-column flex-sm-row">

    <a class="nav-item  flex-sm-fill text-sm-center nav-link" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class="nav-item  flex-sm-fill text-sm-center nav-link  " HREF="ospol.php"> O spoločnosti</A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link " HREF="OB.php"> Zásielka </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item flex-sm-fill text-sm-center nav-link active" HREF="kontakt.php"> Kontakt</A>

</nav>

<body>


    <DIV class="hlavna">


        <form action="cont.php" method="POST">

            <div class="form-group row">
                <label for="con" class="col-sm-2 col-form-label"> Kontaktujte nás:   </label>
            </div>

            <div class="form-group">
                <label for="name">Meno </label>
                <input type="text" class="form-control" required id="name" name="name" placeholder="Meno">
                <label for="email"> Email </label>
                <input type="text" class="form-control" required id="email" name="email" placeholder="Email ">
                <label for="message">Správa:</label>
                <textarea class="form-control" placeholder="Komentár " rows="5" id="message"></textarea>
            </div>


            <center>
                <button type="submit" class="btn btn-primary" required id="submit" data-toggle="modal" name="submit" value="send"> Odoslať </button>
            </center>






        </form>
    <?php include('pages/foot.php') ?>
