<?php
// Connexion à la BDD via des variables d'environnement
$host = getenv('DB_HOST') ?: 'db';
$name = getenv('DB_NAME') ?: 'miniblog';
$user = getenv('DB_USER') ?: 'bloguser';
$pass = getenv('DB_PASSWORD') ?: 'blogpass';


try {
    $pdo = new PDO("mysql:host=$host;dbname=$name;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur BDD : " . $e->getMessage());
}
// Config SMTP (pour MailHog)
define('SMTP_HOST', getenv('SMTP_HOST') ?: 'mailhog');
define('SMTP_PORT', getenv('SMTP_PORT') ?: 1025);
