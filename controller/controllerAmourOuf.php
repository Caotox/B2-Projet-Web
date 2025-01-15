<?php
require_once 'model/modelAmourOuf.php';


class AmourOufController {
    private $model;
    public function __construct(){
        $this->model = new AmourOufModel();
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
        }
    }
}