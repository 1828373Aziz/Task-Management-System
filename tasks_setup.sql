-- Software Engineering Project: Task Management System (MVC)
-- Developed by: Abdulaziz Omar Alsaeed
-- University of Hail

-- 1. Create Database
CREATE DATABASE IF NOT EXISTS task_db;
USE task_db;

-- 2. Create Tasks Table
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    status VARCHAR(50) DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 3. Insert Initial Engineering Data
INSERT INTO tasks (title, status) VALUES 
('Design System Architecture (MVC)', 'Completed'),
('Configure Database Connection (Port 3307)', 'Completed'),
('Implement CRUD Operations', 'In Progress'),
('Prepare Final Documentation', 'Pending');