<?php
/**
 * Contrôleur frontal
 */

// appel du fichier de configuration
require_once "mysqliconfig.php";

// appel du modèle contenant une connexion mysql nécessaire à toutes les pages => $mysqli
require_once "modeles/mysqliconnect.php";

// notre contrôleur frontal va effectuer le travail de routeur "racine"

// pas de variables GET => Accueil

if(empty($_GET)){
    require_once "controleur/AccueilControlleur.php";

// sinon si il existe une variable GET qui s'apelle admin

}elseif(isset($_GET['admin'])){
    require_once "controleur/administatrionControleur.php";

// sinon si il existe une variable GET qui s'apelle contact

}elseif (isset($_GET['contact'])){
    require_once "controleur/contactControleur.php";


}elseif(isset($_GET['CV'])){
    require_once "controleur/CVControleur.php";


}elseif (isset($_GET['galerie'])){
    require_once "controleur/GalerieControlleur.php";

}elseif(isset($_GET['liens'])){
    require_once "controleur/liensControleur.php";

}else{
    require_once "controleur/AccueilControlleur.php";
}


