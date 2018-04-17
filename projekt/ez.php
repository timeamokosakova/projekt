<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projekt";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$message="";
if(!empty($_POST["Prihlásenie"])) {
$result = mysqli_query($conn,"SELECT * FROM login WHERE user='" . $_POST["user"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['id'];
} else {
$message = "Neplatné heslo!";
}
}
if(!empty($_POST["Odhlásenie"])) {
$_SESSION["id"] = "";
session_destroy();
}
?>


<?php include('pages/head.php') ?>


<DIV class="hlavna">





    <div>
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


        <div>
            <div style="display:block;margin:0px auto;"><?php if(empty($_SESSION["id"])) { ?>
                <form action="" method="post" id="frmLogin">
                    <div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>
                    <div class="field-group">
                        <div><label for="login">Meno</label></div>
                        <div><input name="user" type="text" class="input-field"></div>
                    </div>
                    <div class="field-group">
                        <div><label for="password">Heslo</label></div>
                        <div><input name="password" type="password" class="input-field"> </div>
                    </div>
                    <div class="field-group">
                        <div><input type="submit" name="Prihlásenie" value="Prihlásenie" class="form-submit-button"></span></div>
                    </div>
                </form>
            </div>
        </div><?php
        } else {
        $result = mysqlI_query($conn,"SELECT * FROM login WHERE id='" . $_SESSION["id"] . "'");
        $row  = mysqli_fetch_array($result);
        ?>

        <form action="" method="post" id="frmLogout">
            <div class="member-dashboard">
                Vitaj <?php echo ucwords($row['display_name']); ?>, Si úspešne prihlasený!

                Klikni na  <input type="submit" name="Odhlásenie" value="Odhlásenie" class="logout-button">.
            </div>
        </form>
        <br />
        <center><p><A href="Update.php"> Zmena  </A> <br></p></center>
    </div>
</DIV><?php } ?>



        </div>
</DIV><?php include('pages/foot.php') ?>