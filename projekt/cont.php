<?php
// hodnoty spr·vy
$msg = '';
$msgClass = '';

// pre odoslanie
if(filter_has_var(INPUT_POST, 'submit')){
    // hodnoty d·t
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // polÌËka
    if(!empty($email) && !empty($name) && !empty($message)){
       
        // Email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            // polia
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
        } else {
            // pridanÈ
            $toEmail = 'timea.mokosakova@mail.com';
            $subject = 'Kontaktoval v·s: ' .$name;
            $body = '<h2>éiadosù </h2>;
					<h4>Meno</h4><p>'.$name.' </p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Spr·va<h4><p>'.$message.'</p>
				';

            // Email Headers
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

            // Additional Headers
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                // Email Sent
                $msg = 'EMAIL bol poslan˝';
                $msgClass = 'alert-success';
            } else {
                // Failed
                $msg = 'Email nebol poslan˝';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        // Failed
        $msg = 'VyplÚ vetky poloûky';
        $msgClass = 'alert-danger';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>DoruËovacia sluûba </title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" />
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="kontakt.php">Sp‰ù na kontakt </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>">
            <?php echo $msg; ?>
        </div>
        <?php endif; ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label>Meno</label>
                <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" />
            </div>
            <div class="form-group">
                <label>Spr·va </label>
                <textarea name="message" class="form-control">
                    <?php echo isset($_POST['message']) ? $message : ''; ?>
                </textarea>
            </div>
            <br />
            <button type="submit" name="submit" class="btn btn-primary">Odoslaù  </button>
        </form>
    </div>
</body>
</html>