CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50)
);
INSERT INTO users (username, password) VALUES
('jdoe', 'Password123'),
('alice', 'Admin123')
ON DUPLICATE KEY UPDATE username = username;  # Évite les doublons