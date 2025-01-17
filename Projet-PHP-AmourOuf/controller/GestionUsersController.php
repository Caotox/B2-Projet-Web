<?php
include_once '../model/modelAmourOuf.php';

class UserController {
    private $model;
    public function __construct(){
        $this->model = new Model();
    }
    /*
    public function afficherTousLesUsers() {
        $model = new Model(); // Utiliser la bonne classe
        $users = $model->get_all_users(); // Récupérer tous les utilisateurs
        return $users; // Retourner les utilisateurs pour être affichés dans la vue
    }*/
    public function afficherTousLesUsers() {
        $users = $this->model->get_all_users(); 
        //include_once 'view/todolist.php';
        return $users;
    }
    public function supprimerUser() {
        if (isset($_POST['delete_user_id']) && is_numeric($_POST['delete_user_id'])) {
            echo "suppression user controller";
            $id = $_POST['delete_user_id'];
            echo $id;
            $this->model->delete_user($id);
        } else {
            echo "ID invalide ou non fourni.";
        }
    }
    
}
?>
