<?php
require_once 'model/todolistModel.php';
class TodolistController {
    private $model;
    public function __construct(){
        $this->model = new Todolist();
    }
    public function getToDoList(){
        $list = $this->model->getToDoList();
        include_once 'view/todolist.php';
    }
    function sendToDoList(){
        if (isset($_POST['task']) && $_POST['task']!="" /*&& isset($_POST['done'])*/){
            $task = $_POST['task'];
            $done = $_POST['done'] ? 1 : 0;
            $id_list = $_POST['id_list'];
            $this->model->sendToDoList($task, $done);
            //$this->getToDoList();
        }
    }
    function deleteTask() {
        if (isset($_POST['delete'])) {
            $id_task = $_POST['id_task']; 
            echo $id_task;
            $this->model->deleteTask($id_task);
            //$this->getToDoList();
        }
    }
    
}



?>