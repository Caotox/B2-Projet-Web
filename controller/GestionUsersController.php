<?php

include_once 'model/modelAmourOuf.php';

class UserController {

    public function afficherTousLesUsers() {
        $model = new ResultatModel();

        $users = $model->get_all_users();

        require_once 'vueAdmin/GestionFormulaires.php';
    }
}

?>