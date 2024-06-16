<?php
require_once 'config.php';

class TaskModel {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAllTasks() {
        $stmt = $this->pdo->query('SELECT * FROM tasks');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addTask($task) {
        $stmt = $this->pdo->prepare('INSERT INTO tasks (task, completed) VALUES (:task, 0)');
        $stmt->execute(['task' => $task]);
    }

    public function markTaskAsCompleted($taskId) {
        $stmt = $this->pdo->prepare('UPDATE tasks SET completed = 1 WHERE id = :id');
        $stmt->execute(['id' => $taskId]);
    }

    public function deleteTask($taskId) {
        $stmt = $this->pdo->prepare('DELETE FROM tasks WHERE id = :id');
        $stmt->execute(['id' => $taskId]);
    }
}
?>
