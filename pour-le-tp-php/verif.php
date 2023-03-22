<?php

require_once("compte-classe.php");
require_once("compteDAO-classe.php");


if(!isset($_POST["nom"]) ||  !isset($_POST["password"])){
    header("Location:login.php?error=merci de remplir les champs");
}else{
$compte=new compte(0,$_POST["nom"],$_POST["password"]);
$compteDAOobj=new compteDAO($compte);

if($compteDAOobj->exist()){
    session_start();
    $_SESSION["login"]= $_POST["nom"];
    $_SESSION["CONNECT"] = "OK";

    
    header("Location:accueil.php");
}else {
    header("Location:login.php?error=cela n existe pas");
    
}}

