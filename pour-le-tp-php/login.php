<html>
    <head><title>Formulaire d'accueil</title></head>
    <body>
        <h1 style="color:#42FF00;">Bienvenue sur la page de connexion</h1>
        <p style="color:#42FF00;">Veuillez vous connecter</p>  

        <! -- commentaire, URL= http://localhost/pepouze-la-pelouse/login.php -->
        <form method="post" action="verif.php">
            Login : <input type="test" name="nom" placeholder="Entrez votre login" /><br />
            Password : <input type="password" name="password" placeholder="Entrez votre mot de passe" /><br />
            <input type="Submit" value="Se connecter" />

        </form>
    </body>
</html>    

<?php
    if (isset($_GET['error'])) {
        $error=$_GET['error'];
        echo $error;
    }
?>