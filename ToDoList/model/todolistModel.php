<?php
require_once 'bdd.php';

class Todolist{
    private $bdd;
    public function __construct(){
        $this->bdd = Bdd::connexion();
    }
    public function getToDoList(){
        $list = $this->bdd->query("SELECT * FROM todolist")->fetchAll(PDO::FETCH_ASSOC);
        return $list;
    }
    public function sendToDoList($task, $done){
        $todo = $this->bdd->prepare('INSERT INTO todolist (task, done) VALUES (?,?)');
        return $todo->execute([$task, $done]);
    }
    public function deleteTask($id_task){
        $delete = $this->bdd->prepare('DELETE FROM todolist WHERE id_list = ?');
        return $delete->execute([$id_task]);
    }
}
?>