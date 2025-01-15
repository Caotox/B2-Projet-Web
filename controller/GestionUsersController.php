<?php
include_once '../model/modelAmourOuf.php';

class UserController {
    public function afficherTousLesUsers() {
        $model = new Model(); // Utiliser la bonne classe
        $users = $model->get_all_users(); // Récupérer tous les utilisateurs
        return $users; // Retourner les utilisateurs pour être affichés dans la vue
    }
}
?>
