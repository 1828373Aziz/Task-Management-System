CREATE DATABASE IF NOT EXISTS task_db;
USE task_db;

CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    priority VARCHAR(20) DEFAULT 'Medium',
    due_date DATE,
    status VARCHAR(50) DEFAULT 'In Progress',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Optional: Initial data
INSERT INTO tasks (title, priority, due_date, status) VALUES 
('Initial Project Setup', 'High', CURDATE(), 'Completed');