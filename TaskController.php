<?php
require_once 'models/task.php';

class TaskController {
    private $task;

    public function __construct($db) {
        $this->task = new Task($db);
    }

    public function handleRequest() {
        if (isset($_POST['add_task'])) {
            $title = $_POST['title'];
            $priority = $_POST['priority'] ?? 'Medium';
            $due_date = $_POST['due_date'] ?? null;
            
            if (!empty($title)) {
                $this->task->add($title, $priority, $due_date);
            }
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }

        if (isset($_GET['complete'])) {
            $this->task->markAsCompleted($_GET['complete']);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }

        if (isset($_GET['delete'])) {
            $this->task->delete($_GET['delete']);
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        }

        return $this->task->getAllTasks();
    }
}