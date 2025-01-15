<?php
require_once 'model/modelAmourOuf.php';


class Controller {
    private $model;
    public function __construct(){
        $this->model = new Model();
    }
    public function inscription(){
        if (isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->model->inscription($email, $mdp);
        }
    }
    public function connexion(){
        if (isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->model->connexion($email, $password);
            include_once 'vueUser/ConnexionUser.php';
        }
    }
    public function inscription_admin(){
        if (isset($_POST['email_admin']) && isset($_POST['passwor_admin'])){
            $email = $_POST['email_admin'];
            $password = $_POST['password_admin'];
            $this->model->inscription($email, $mdp);
        }
    }
    public function connexion_admin(){
        if (isset($_POST['email_admin']) && isset($_POST['password_admin'])){
            $email = $_POST['email_admin'];
            $password = $_POST['password_admin'];
            $this->model->connexion($email, $password);
        }
    }
}