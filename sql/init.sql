CREATE TABLE IF NOT EXISTS articles (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;


INSERT INTO articles (title, content) VALUES
('Bienvenue sur MiniBlog', 'Premier article de test avec Docker.'),
('Docker en 3 minutes', 'Docker permet de conteneuriser nos applications...'),
('Docker Compose en action', 'Avec docker-compose, on orchestre plusieurs conteneurs.');
