<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <LINK rel="stylesheet" type="text/css" href="styl.css">
    <title>Doruèovacia služba</title>
</head>

    <a href="hlavna.php">
        <img src="log.JPG" style="width:10%;height:40px">
    </a>

<body>


    <DIV class=”menu”>
        <table>
            <tr>
                <td><a href="hlavna.php?page=1"> <img src="DOMOV.png" style="vertical-align: text-bottom;;width:40PX;height:40Px"> </a>
                <td><A HREF="oSPOL.php?page=2"> O spoloènosti</A></td>
                <td><A HREF="OB.php?page=3">Zásielka</A></td>
                <td><A HREF="SZ.php?page=4"> Sledovanie zásielok </A></td>
                <td><A HREF="EZ.php?page=5">Evidencia Zákazníkov</A></td>
                <td><A HREF="kontakt.php?page=6">Kontakt</A></td>
                <td><br></td>
            </tr>
        </table>
<?php
        $id_stranky = $_GET["page"];

        switch ($id_stranky) {

        case 1 : include_once ("pages/hlavna.php"); break;
        case 2 : include_once ("pages/ospol.php"); break;
        case 3 : include_once ("pages/ob.php"); break;
        case 4 : include_once ("pages/sz.php"); break;
        case 5 : include_once ("pages/ez.php"); break;
        case 6 : include_once ("pages/kontakt.php");break;
        default : include_once ("pages/hlavna.php"); break;

        }




        ?>

        <DIV class="hlavna">
            <CENTER><img src="posta.gif" style="vertical-align: text-bottom;;width:400PX;height:400PX0px"></CENTER>
        </DIV>
</body>
        <p style="font-size:small; text-align:center;"> Tímea Mokošáková, 2018</style>
</html>