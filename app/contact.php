<?php
require 'config.php';
$message_envoye = false;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'admin@miniblog.local';
    $subject = 'Nouveau message de ' . $_POST['nom'];
    $body = $_POST['message'];
    $headers = "From: " . $_POST['email'] . "\r\n";


    // Configure PHP pour utiliser le SMTP de MailHog
    ini_set('SMTP', SMTP_HOST);
    ini_set('smtp_port', SMTP_PORT);
    ini_set('sendmail_from', $_POST['email']);


    mail($to, $subject, $body, $headers);
    $message_envoye = true;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>Contact</title></head>
<body style="font-family: sans-serif; max-width: 600px; margin: 2em auto;">
    <h1>Contact</h1>
    <?php if ($message_envoye): ?>
        <p style="color: green;">Message envoyé ! Va voir dans MailHog.</p>
    <?php endif; ?>
    <form method="POST">
        <p><input name="nom" placeholder="Ton nom" required></p>
        <p><input name="email" type="email" placeholder="Ton email" required></p>
        <p><textarea name="message" placeholder="Ton message" required></textarea></p>
        <p><button type="submit">Envoyer</button></p>
    </form>
    <p><a href="index.php">← Retour</a></p>
</body>
</html>
