<?php
if (isset($_post['submit']))
{
    $name = $_post ['name'];
    $subject = $_post ['subject'];
    $mailfrom = $_post ['mailfrom'];
    $message = $_post ['message'];

    $mailto = "timea.mokosakova@gmail.com";
    $headers = "From: ".$mailfrom ;
    $txt = "Dostal si email od " .$name . ".\n\n" .$message;


    mail($mailto,$subject, $txt, $headers);
    header("Location: cont.php?mailsend");
}
?>               