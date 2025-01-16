<?php
$route = $_GET['route'] ?? 'accueilAdmin';
echo $route . "\n";
switch ($route){
    case 'accueilAdmin':
        require 'vueAdmin/ConnexionAdmin.php';
        break;
    default:
        require 'view/erreur.php';
        break;
}
?>