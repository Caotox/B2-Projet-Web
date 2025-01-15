<?php
require_once 'model/modelAmourOuf.php';


class Controller {
    private $model;
    public function __construct(){
        $this->model = new Model();
    }
    public function inscription_user(){
        include_once 'vueUser/InscriptionUser.php';
        echo "ça inscrit";
        if (isset($_POST['email']) && isset($_POST['password'])){
            echo "ça rentre dans isset";
            $email = $_POST['email'];
            $password = $_POST['password'];
            echo $email . " " . $password;
            $this->model->inscription_user($email, $mdp);
        }
    }
    public function connexion_user(){
        include_once 'vueUser/ConnexionUser.php';
        if (isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $this->model->connexion_user($email, $password);
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