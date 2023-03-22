<?php

require_once("compteDAO-classe.php");
require_once("compte-classe.php");

$compte= new compte($_GET['id'], "","");
$compteDAO= new compteDAO($compte);
$compteDAO->delete();  // tu prends la classe et tu lui dis quoi faire

header("Location:accueil.php?message=vous avez supprimé le compte");

?>