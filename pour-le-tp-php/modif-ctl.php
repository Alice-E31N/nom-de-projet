<?php

require_once("compteDAO-classe.php");
require_once("compte-classe.php");

$compte= new compte($_POST['id'], $_POST['nom'], $_POST['password']);

$compteDAO= new compteDAO($compte);
$compteDAO->modifier();  // tu prends la classe et tu lui dis quoi faire

header("Location:accueil.php?info=vous avez modifié le compte");

  
?>