<?php

$idCV = (int) $_GET["CV"];

// si on a tenté de nous attaquer
if($idCV===0){
    // on redirige vers un site externe avec header("location: url d'un site")
    header("Location: https://fr.wiktionary.org/wiki/d%C3%A9chet");
    die();
}
$pour_menu = listeMenu($mysqli);

require_once "vues/CV.php";