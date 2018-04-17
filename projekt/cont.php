<?php


if  (isset($_POST["name"]) && isset ($_POST["email"]) && isset ($_POST["text"])) {

    $name = $_POST["name"];
     $email = $_POST["email"];
 $text = $_POST["text"];

    if (!empty($name) || !empty($email) || !empty ($text))
    {
        $to = "timea.mokosakova@gmail.com";
        $subject = "Kontaktný formulár";
        $body = $name. "\n".$text;
        $headers = "From: ".$email ;

        if(mail($to,$subject, $body, $headers)){
            
            echo "Vďaka za kontaktovanie";
        }
        else{
            echo "Error";

        }

    }
    else {
        echo "Položky sú prázdne";  

    }

}
?>


<form action="cont.php" method="POST">
Name : <input type="text" name="name" >
    <br />
    Email adress: <input type="text" name="email" >
    <br />
    message :
    <br />
    <textarea name="text" rows="6" cols="30"></textarea>
    <input type="submit" value="send" >


</form>