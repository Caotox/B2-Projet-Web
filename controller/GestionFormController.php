<?php
include_once 'model/modelAmourOuf.php';

class GestionFormulairesController {
    public function afficherResultats() {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $model = new ResultatModel(); 
            $resultats = $model->get_resultat(); 

            if (!empty($resultats)) {
                require_once 'vueAdmin/GestionFormulaires.php';
            } else {
                echo '<p>Aucun résultat trouvé pour cet utilisateur.</p>';
            }
        } else {
            echo '<p>Erreur : Aucun ID utilisateur spécifié.</p>';
        }
    }
}


?>