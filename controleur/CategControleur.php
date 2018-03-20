<?php
require_once "modeles/categModel.php";

$idcateg = (int) $_GET["c"];

if($idcateg===0){
    // on redirige vers un site externe avec header("location: url d'un site")
    header("Location: https://fr.wiktionary.org/wiki/d%C3%A9chet");
    die();
}

$menu = listeMenu($mysqli);

// on récupère le titre et la description de la catégorie
$detailCateg = recupCategInfo($mysqli,$idcateg);