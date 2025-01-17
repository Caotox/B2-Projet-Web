<?php
require_once 'model/modelAmourOuf.php';

class Controller {
    private $model;
    public function __construct(){
        $this->model = new Model();
    }
    public function inscription_user(){
        include_once 'vueUser/InscriptionUser.php';
        if (isset($_POST['email']) && isset($_POST['mdp'])){
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            echo $email . " " . $mdp;
            $this->model->inscription_user($email, $mdp);
        }
    }
    public function connexion_user() {
        include_once 'vueUser/ConnexionUser.php';
        if (isset($_POST['email']) && isset($_POST['mdp'])) {
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            echo $email . " " . $mdp;
            $result = $this->model->connexion_user($email, $mdp);
            if ($result['success']) {
                echo $result['message'];
                //header('Location: ?route=dashboard');
                header('Location: vueUser/FormulaireUser.php');
                exit();
            } else {
                echo $result['message'];
            }
        }
    }
    public function connexion_admin() {
        include_once 'vueAdmin/ConnexionAdmin.php';
        if (isset($_POST['email']) && isset($_POST['mdp'])) {
            echo "test";
            $email = $_POST['email'];
            $mdp = $_POST['mdp'];
            echo $email . " " . $mdp;
            $result = $this->model->connexion_admin($email, $mdp);
            if ($result['success']) {
                echo $result['message'];
                //header('Location: ?route=dashboard');
                header('Location: vueAdmin/GestionFormulaires.php');
                exit();
            } else {
                echo $result['message'];
            }
        }
    }
    public function get_all_users() {
        $users = $this->model->get_all_users(); 
        include_once 'vueUser/voirUsers.php';
    }
    public function enregistrerResultat() {
        if (isset($_POST['comptabilite'], $_POST['degre'])) {
            $comptabilite = $_POST['comptabilite'];
            $degre = $_POST['degre'];

            try {
                $model->send_resultat($comptabilite, $degre); 
                echo "Résultat envoyé";
            } catch (Exception $e) {
                echo "Erreur";
                echo "Une erreur est survenue lors de l'enregistrement : " . $e->getMessage() . "";
            }
        } else {
            echo "<h1>Erreur</h1>";
        }
    }
}