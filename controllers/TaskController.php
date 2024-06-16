<?php
require_once 'models/TaskModel.php';

class TaskController {
    private $model;

    public function __construct() {
        $this->model = new TaskModel();
    }

    public function index() {
        $tasks = $this->model->getAllTasks();
        require 'views/task_list.php';
    }

    public function addTask($task) {
        $this->model->addTask($task);
        header('Location: index.php');
    }

    public function markTaskCompleted($taskId) {
        $this->model->markTaskAsCompleted($taskId);
        header('Location: index.php');
    }

    public function deleteTask($taskId) {
        $this->model->deleteTask($taskId);
        header('Location: index.php');
    }
}
?>
