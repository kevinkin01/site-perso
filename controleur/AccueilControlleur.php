<?php

/**
 * Contrôleur gérant la page d'accueil
 */
require_once "modeles/categModel.php";

$menu = listeMenu($mysqli);

// on prend la vue
require_once "vues/accueil.php";