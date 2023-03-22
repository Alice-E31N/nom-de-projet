<?php 
session_start();

if ($_SESSION["CONNECT"] != "OK") {
    header("Location:login.php");
}
?>

<html>
    <head><title>Page d'accueil</title></head>
    <body>
        <?php
            echo 'Bravo ' .$_SESSION['login']. " vos login/mot de passe sont corrects" ?>

        <! -- commentaire, URL= http://localhost/pour-le-tp-php/accueil.php -->

        <p style="color:#42FF00;">Bienvenue sur votre page</p>  
        <IMG SRC="https://media0.giphy.com/media/111ebonMs90YLu/200.gif">
<br><br>
    <?php
    require_once("compteDAO-classe.php");

    compteDAO::lister();  // tu prends la classe et tu lui dis quoi faire
    ?>
      


    <?php
        if (isset($_GET['message'])) {
            $message=$_GET['message'];
            echo $message;
        }
        if (isset($_GET['info'])) {
            $info=$_GET['info'];
            echo $info;
        }
    ?>

    </body>
</html>    
