<?php
include_once '../model/modelAmourOuf.php';

class GestionFormulairesController {
    public function afficherResultats($id = null) {
        if ($id !== null && !empty($id)) {
            $model = new Model(); 
            $resultats = $model->get_resultat($id); 

            if (!empty($resultats)) {
                return $resultats; 
            } else {
                return '<p>Aucun résultat trouvé pour cet utilisateur.</p>';
            }
        } else {
            return '<p>Erreur : Aucun ID utilisateur spécifié.</p>';
        }
    }
}
?>
