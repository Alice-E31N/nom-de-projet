<html>
    <head><title>Formulaire de modification du compte</title></head>
    <body>
        <h1 style="color:#42FF00;">Bienvenue sur la page de modification du compte sélectionné</h1>

        <IMG SRC="https://media1.giphy.com/media/3xz2Bw12fe9iyG06v6/200w.gif?cid=6c09b952qsq8geod9cu97z6j9t14fsy0fgtrs3kgca9673iv&rid=200w.gif&ct=g>
        <br></br>

        <p style="color:#42FF00;">Veuillez faire les changements</p>  

        <! -- commentaire, URL= http://localhost/pour-le-tp-php/modif-form.php -->

<?php
require_once("compteDAO-classe.php");
require_once("compte-classe.php");

$compte= new compte($_GET['id'], "","");

$compteDAO= new compteDAO($compte);
$compte=$compteDAO->recup();  // tu prends la classe et tu lui dis quoi faire



?>
        
        <form method="post" action="modif-ctl.php">     
            <input type="hidden" name="id" value="<?php echo $compte->id;?>">                        
            Login : <input type="text" name="nom" value="<?php echo $compte->username;?>" /><br />
            Password : <input type="password" name="password" value="<?php echo $compte->password;?>" /><br />
            <input type="Submit" value="Valider" />

        </form>
    </body>
</html> 