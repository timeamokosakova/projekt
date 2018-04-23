<?php
if (isset($_POST["submit"])) {

    $sendto      = 'timea.mokosakova@gmail.com';


    $message = $_POST["message"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = "Stránka";
    $Field = "";
    $Field .= "Name: ";
    $Field .= $name;
    $Field .= "\n";
    $Field .= "Email: ";
    $Field .= $email;
    $Field .= "\n";
    $Field .= "Message: ";
    $Field .= $message;
    $Field .= "\n";

    $ok = mail($sendto, $subject, $Field, "From:".$email);

    if ($ok) {


        $usp = "<div class='alert alert-success'>Odoslané.</div>";

    }
    else {
        $prob = "<div class='alert alert-danger' > Niečo je zlé </div>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Doručovacia služba </title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" />
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="kontakt.php">Späť na kontakt </a>
            </div>
        </div>
    </nav>
    <body>

        <div class="container">
            <?php
        if (isset($_POST["submit"])) {
            if ($usp) {


                echo $usp;

            }
            else {
                echo $prob;
            }
        }
            ?>
            <form action="cont.php" method="post">
                <div class="form-group">
                    <label for="name">Meno:</label>
                    <input type="text" placeholder="Meno" name="name" class="form-control" id="name" required />
                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="email" placeholder="Email" name="email" class="form-control" id="email" required />
                </div>
                <textarea name="message" class="form-control" placeholder="Zadaj komentár"></textarea>
                <br />
                <button type="submit" name="submit" class="btn btn-primary">Odoslať  </button>

            </form>

        </div>

    </body>
</html>