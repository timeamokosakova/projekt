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

<?php include('pages/head.php') ?>


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
    </div>

    <?php include('pages/foot.php') ?>
