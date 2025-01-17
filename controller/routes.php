<?php
$route = $_GET['route'] ?? 'accueil';
// echo $route . "\n";
switch ($route){
    case 'accueil':
        require 'vueUser/accueil.php';
        break;

    case 'connexionUser':
        require 'controller/controllerAmourOuf.php';
        $var = new Controller();
        $var->connexion_user();
        break;
    case 'inscriptionUser':
        require 'controller/controllerAmourOuf.php';
        $var = new Controller();
        $var->inscription_user();
        break;
    case 'formulaires':
        require 'vueUser/GestionFormulaires.php';
        break;
    case 'reponseFormulaire':
        require 'vueUser/ReponseFormulaire.php';
        $var = new Controller();
        $var->enregistrerResultat();
        break;
    default:
        require 'view/erreur.php';
        break;
}
?>