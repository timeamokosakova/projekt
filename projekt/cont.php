<?php

// define variables and set to empty values
$meno_error = $email_error  = "";
$meno = $email =  $message = "";

//form is submitted with POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["meno"])) {
    $name_error = "Name is required";
  } else {
    $name = test_input($_POST["meno"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$meno)) {
      $meno_error = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["email"])) {
    $email_error = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_error = "Invalid email format";
    }
  }


  if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }

  if ($name_error == '' and $email_error == ''){
      $message_body = '';
      unset($_POST['submit']);
      foreach ($_POST as $key => $value){
          $message_body .=  "$key: $value\n";
      }

      $to = 'timea.mokosakova@gmail.com';
      $subject = 'Contact Form Submit';
      if (mail($to, $subject, $message)){
          $success = "Message sent, thank you for contacting us!";
          $name = $email =  $message  '';
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


<!DOCTYPE html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Doručovacia služba</title>
</head>

<a href="index.php">
    <img src="LOG.PNG" style="width:10%;height:40px">
</a>



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
    <<?php include('pages/foot.php') ?>
