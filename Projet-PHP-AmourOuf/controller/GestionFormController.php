<?php
include_once '../model/modelAmourOuf.php';

class GestionFormulairesController {
    private $model;
    public function __construct(){
        $this->model = new Model();
    }
    public function afficherResultats($id) {
        $resultats = $this->model->get_resultat($id);
        if (!empty($resultats)) {
            return $resultats; 
        } else {
            return '<p>Aucun résultat trouvé pour cet utilisateur.</p>';
        }
    }
}
?>
