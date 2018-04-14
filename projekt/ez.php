

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Doručovacia služba</title>
</head>

<a href="index.php">
    <img src="log.JPG" style="width:10%;height:40px">
</a>



<nav class="nav nav-pills nav-fill nav-fill">

    <a class="nav-item nav-link disabled" href="index.php"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
    <A class="nav-item nav-link disabled" HREF="ospol.php"> O spoločnosti</A>
    <A class="nav-item nav-link disabled" HREF="OB.php"> Zásielka </A>
    <A class="nav-item nav-link disabled" HREF="SZ.php"> Sledovanie zásielok </A>
    <A class="nav-item nav-link active" HREF="EZ.php"> Správa zásielok </A>
    <A class="nav-item nav-link disabled" HREF="kontakt.php"> Kontakt</A>

</nav>

<body>
    <DIV class="hlavna">


    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projekt";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $message="";
    if(!empty($_POST["login"])) {
    $result = mysqli_query($conn,"SELECT * FROM login WHERE user='" . $_POST["user"] . "' and password = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)) {
    $_SESSION["id"] = $row['id'];
    } else {
    $message = "Invalid Username or Password!";
    }
    }
    if(!empty($_POST["logout"])) {
    $_SESSION["id"] = "";
    session_destroy();
    }
    ?>
        <html>
        <head>
            <title>User Login</title>
            <style>
                #frmLogin {
                    padding: 20px 60px;
                    background: #B6E0FF;
                    color: #555;
                    display: inline-block;
                    border-radius: 4px;
                }

                .field-group {
                    margin: 15px 0px;
                }

                .input-field {
                    padding: 8px;
                    width: 200px;
                    border: #A3C3E7 1px solid;
                    border-radius: 4px;
                }

                .form-submit-button {
                    background: #65C370;
                    border: 0;
                    padding: 8px 20px;
                    border-radius: 4px;
                    color: #FFF;
                    text-transform: uppercase;
                }

                .member-dashboard {
                    padding: 40px;
                    background: #D2EDD5;
                    color: #555;
                    border-radius: 4px;
                    display: inline-block;
                    text-align: center;
                }

                .logout-button {
                    color: #09F;
                    text-decoration: none;
                    background: none;
                    border: none;
                    padding: 0px;
                    cursor: pointer;
                }

                .error-message {
                    text-align: center;
                    color: #FF0000;
                }

                .demo-content label {
                    width: auto;
                }
            </style>
        </head>
        <body>
            <div>
                <div style="display:block;margin:0px auto;">
                    <?php if(empty($_SESSION["id"])) { ?>
                    <form action="" method="post" id="frmLogin">
                        <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
                        <div class="field-group">
                            <div><label for="login">Username</label></div>
                            <div><input name="user" type="text" class="input-field"></div>
                        </div>
                        <div class="field-group">
                            <div><label for="password">Password</label></div>
                            <div><input name="password" type="password" class="input-field"> </div>
                        </div>
                        <div class="field-group">
                            <div><input type="submit" name="login" value="Login" class="form-submit-button"></span></div>
                        </div>
                    </form>
                <?php
                } else {
                $result = mysqlI_query($conn,"SELECT * FROM login WHERE id='" . $_SESSION["id"] . "'");
                $row  = mysqli_fetch_array($result);
                ?>
                    <form action="" method="post" id="frmLogout">
                        <div class="member-dashboard">
                            Welcome <?php echo ucwords($row['display_name']); ?>, You have successfully logged in!<br>
                            Click to <input type="submit" name="logout" value="Logout" class="logout-button">.
                        </div>
                    </form>
                </div>
            </div>
            <?php } ?>


            <A href =" Update.php" > Zmena  </A>


        </body>
    </html>

    </DIV>
   


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>


<footer>

     Tímea Mokošáková, 2018

</footer>

</html>