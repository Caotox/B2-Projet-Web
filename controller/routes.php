<?php
$route = $_GET['route'] ?? 'connexionUser';
//echo $route . "\n";
switch ($route){
    case 'accueil':
        require 'view/accueil.php';
        break;

    case 'connexionUser':
        require 'controller/controllerAmourOuf.php';
        $var = new Controller();
        $var->connexion();
        break;

    default:
        require 'view/erreur.php';
}
?>