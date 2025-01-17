<?php
$route = $_GET['route'] ?? 'accueil';
//echo $route . "\n";
switch ($route){
    case 'accueil':
        require 'view/accueil.php';
        break;

    case 'todolist':
        require 'controller/todolistController.php';
        $list = new TodolistController();
        $list->deleteTask();
        $list->sendToDoList();
        $list->getToDoList();
        break;

    default:
        require 'view/erreur.php';
}
?>