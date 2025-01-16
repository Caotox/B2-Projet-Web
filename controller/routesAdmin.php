<?php
$route = $_GET['route'] ?? 'accueilAdmin';
echo $route . "\n";
switch ($route){
    case 'accueilAdmin':
        require 'controller/controllerAmourOuf.php';
        $var = new Controller();
        $var->connexion_admin();
        break;
    case 'voirUsers':
        require 'controller/controllerAmourOuf.php';
        $var = new Controller();
        $var->get_all_users();
        break;
    default:
        require 'view/erreur.php';
        break;
}
?>


