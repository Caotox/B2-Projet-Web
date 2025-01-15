<?php
require_once 'bdd.php';

class Model{
    private $bdd;
    public function __construct(){
        $this->bdd = Bdd::connexion();
    }
    // Routes pour Connexion / Inscription
    public static function connexion(){ // Connexion (vérif email et mdp)
        $user = $this->bdd->prepare('SELECT * FROM user WHERE email ? AND password = ?');
        $user->execute(array($_POST['email'], $_POST['password']));
    }
    public static function inscription(){ // Inscription (vérif email unique) 
        $existe = $this->bdd->prepare('SELECT * FROM user WHERE email = ?');
        $existe->execute(array($_POST['email']));
        if($exist->rowCount() > 0){
            echo "Cet email est déjà utilisé";
        }
        else{
            $user = $this->bdd->prepare('INSERT INTO user (email, password) VALUES (?, ?)');
            $user->execute(array($_POST['email'], $_POST['password']));
        }
    }
    public static function deconnexion(){ // Déconnexion
        session_destroy();
    }
    // Routes Users
    public static function get_user(){ // Récupérer un user en fonction de son id
        $user = $this->bdd->prepare('SELECT * FROM user WHERE id = ?');
        $user->execute(array($_POST['id']));
        return $user->fetch();
    }
    public static function get_all_users(){ // Récupérer tous les users existants
        $users = $this->bdd->query('SELECT * FROM user');
        return $users->fetchAll();
    }
    public static function delete_user(){ // Supprimer un user en fonction de son id
        $user = $this->bdd->prepare('DELETE user WHERE id = ?');
        $user->execute(array($_POST['id']));
    }

    // Routes Tests
    public static function get_tests(){ // Récupérer tous les tests existants
        $tests = $this->bdd->prepare('SELECT * FROM tests');
    }

    // Routes Resultats
    public static function get_resultat(){ // Récupérer les résultats d'un user en fonction de son id
        $resultat = $this->bdd->prepare('SELECT * FROM resultat WHERE id_user = ?');
        $resultat->execute(array($_POST['id']));
        return $resultat->fetchAll();
    }
    public static function send_resultat(){ // Envoyer un résultat (et le lier au user)
        $result = $this->bdd->prepare('INSERT INTO resultat (id_user, id_test, resultat) VALUES (?, ?, ?)');
        $result->execute(array($_POST['id_user'], $_POST['id_test'], $_POST['resultat']));
    }
}
?>