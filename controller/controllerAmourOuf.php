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
            $mdp = $_POST['mdp'];
            echo $email . " " . $password;
            $this->model->inscription_user($email, $mdp);
        }
    }
    public function connexion_user(){
        include_once 'vueUser/ConnexionUser.php';
        if (isset($_POST['email']) && isset($_POST['mdp'])){
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            $this->model->connexion_user($email, $mdp);
        }
    }
    public function inscription_admin(){
        if (isset($_POST['email_admin']) && isset($_POST['mdp_admin'])){
            $email = $_POST['email_admin'];
            $password = $_POST['mdp_admin'];
            $this->model->inscription($email, $mdp);
        }
    }
    public function connexion_admin(){
        if (isset($_POST['email_admin']) && isset($_POST['mdp_admin'])){
            $email = $_POST['email_admin'];
            $mdp = $_POST['mdp_admin'];
            $this->model->connexion($email, $mdp);
        }
    }
}