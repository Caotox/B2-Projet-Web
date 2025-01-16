<?php
require_once 'bdd.php';

class Model {
    private $bdd;
    public function __construct(){
        $this->bdd = Bdd::connexion();
    }
    // Routes pour Connexion / Inscription
    public function connexion_user($email, $mdp) {
        try {
            $user = $this->bdd->prepare('SELECT * FROM users WHERE email = ?');
            $user->execute([$email]);
            $result = $user->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                if ($mdp == $result['mdp']) {
                    return ['success' => true, 'message' => "Connexion réussie !"];
                } else {
                    return ['success' => false, 'message' => "Mot de passe incorrect."];
                }
            } else {
                return ['success' => false, 'message' => "Adresse email introuvable."];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => "Erreur lors de la connexion : " . $e->getMessage()];
        }
    }
    public function connexion_admin($email, $mdp) {
        try {
            $user = $this->bdd->prepare('SELECT * FROM admins WHERE email_admin = ?');
            $user->execute([$email]);
            $result = $user->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                if ($mdp == $result['mdp_admin']) {
                    return ['success' => true, 'message' => "Connexion réussie !"];
                } else {
                    return ['success' => false, 'message' => "Mot de passe incorrect."];
                }
            } else {
                return ['success' => false, 'message' => "Adresse email introuvable."];
            }
        } catch (PDOException $e) {
            return ['success' => false, 'message' => "Erreur lors de la connexion : " . $e->getMessage()];
        }
    }
    public function inscription_user($email, $mdp){ // Inscription (vérif email unique) 
        $existe = $this->bdd->prepare('SELECT * FROM users WHERE email = ?');
        $existe->execute(array($email));
        if($existe->rowCount() > 0){
            echo "Cet email est déjà utilisé";
        }
        else{
            echo "Cet email est disponible";
            $user = $this->bdd->prepare('INSERT INTO users (email, mdp) VALUES (?, ?)');
            $user->execute(array($email, $mdp));
        }
    }
    public function deconnexion(){ // Déconnexion
        session_destroy();
    }
    // Routes Users
    public function get_user($id){ // Récupérer un user en fonction de son id
        $user = $this->bdd->prepare('SELECT * FROM users WHERE id = ?');
        $user->execute(array($id));
        return $user->fetch();
    }
    public function get_all_users(){ // Récupérer tous les users existants
        echo "et ça arrive là";
        $users = $this->bdd->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }
    public function delete_user($id){ // Supprimer un user en fonction de son id
        $user = $this->bdd->prepare('DELETE users WHERE id = ?');
        $user->execute(array($id));
    }

    // Routes Tests
    public function get_tests(){ // Récupérer tous les tests existants
        $tests = $this->bdd->prepare('SELECT * FROM tests');
    }

    // Routes Resultats
    public function get_resultat($id){ // Récupérer les résultats d'un user en fonction de son id
        $resultat = $this->bdd->prepare('SELECT * FROM resultat WHERE id_user = ?');
        $resultat->execute(array($id));
        return $resultat->fetchAll();
    }
    public function send_resultat($id, $compt, $degre){ // Envoyer un résultat (et le lier au user)
        $result = $this->bdd->prepare('INSERT INTO reponses (id_user, comptabilite, degre) VALUES (?, ?, ?)');
        $result->execute(array($id, $compt, $degre));
    }
}
?>