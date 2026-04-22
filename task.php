<?php
class Task {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllTasks() {
        return $this->db->query("SELECT * FROM tasks ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($title, $priority = 'Medium', $due_date = null) {
        $stmt = $this->db->prepare("INSERT INTO tasks (title, priority, due_date, status) VALUES (?, ?, ?, 'In Progress')");
        return $stmt->execute([$title, $priority, $due_date]);
    }

    public function markAsCompleted($id) {
        $stmt = $this->db->prepare("UPDATE tasks SET status = 'Completed' WHERE id = ?");
        return $stmt->execute([$id]);
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM tasks WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>