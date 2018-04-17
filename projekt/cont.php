<?php
// hodnoty správy
$msg = '';
$msgClass = '';

// pre odoslanie
if(filter_has_var(INPUT_POST, 'submit')){
    // hodnoty dát
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // položka
    if(!empty($email) && !empty($name) && !empty($message)){
       
        // Email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            // polia
            $msg = 'Neplatný email';
            $msgClass = 'alert-danger';
        } else {
            // pridaný
            $toEmail = 'petulik608@azet.sk';
            $subject = 'Kontaktoval vás: ' .$name;
            $body = '<h2>Žiadosť </h2>;
					<h4>Meno</h4><p>'.$name.' </p>
					<h4>Email</h4><p>'.$email.'</p>
					<h4>Správa<h4><p>'.$message.'</p>
				';

            // Email hlavička
            $headers = "MIME-Version: 1.0" ."\r\n";
            $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

            
            $headers .= "From: " .$name. "<".$email.">". "\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
                // Email poslaný
                $msg = 'EMAIL bol poslaný';
                $msgClass = 'alert-success';
            } else {
                // neposlaný
                $msg = 'Email nebol poslaný';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        // zle
        $msg = 'Vyplnte všetky položky';
        $msgClass = 'alert-danger';
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
                <label>Správa </label>
                <textarea name="message" class="form-control">
                    <?php echo isset($_POST['message']) ? $message : ''; ?>
                </textarea>
            </div>
            <br />
            <button type="submit" name="submit" class="btn btn-primary">Odoslať  </button>
        </form>
    </div>
</body>
</html>