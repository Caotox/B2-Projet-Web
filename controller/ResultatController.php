<?php

require_once 'model/modelAmourOuf.php'; 

class ResultatController {

    public function enregistrerResultat() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_user'], $_POST['id_test'], $_POST['resultat'])) {
            $id_user = $_POST['id_user']; 
            $id_test = $_POST['id_test'];
            $resultat = $_POST['resultat'];

            try {
                $model = new ResultatModel();
                $model->send_resultat($id_user, $id_test, $resultat); 
                echo "<a href='FormulaireUser.php'>Retour au formulaire</a>";
            } catch (Exception $e) {
                echo "<h1>Erreur</h1>";
                echo "<p>Une erreur est survenue lors de l'enregistrement : " . $e->getMessage() . "</p>";
            }
        } else {
            echo "<h1>Erreur</h1>";
        }
    }
}
