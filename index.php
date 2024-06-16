<?php
// index.php

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

require_once 'controllers/TaskController.php';

$controller = new TaskController();

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'add_task':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $task = $_POST['task'];
            $controller->addTask($task);
        }
        break;
    default:
        // Jika action tidak dikenali, redirect ke halaman utama
        header('Location: index.php');
        break;
}
?>
