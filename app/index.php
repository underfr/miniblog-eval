<?php require 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MiniBlog</title>
    <style>
        body { font-family: sans-serif; max-width: 800px; margin: 2em auto; }
        article { border-bottom: 1px solid #ccc; padding: 1em 0; }
        h1 { color: #2c3e50; }
        a { color: #3498db; }
    </style>
</head>
<body>
    <h1>MiniBlog</h1>
    <p><a href="contact.php">Contactez-nous</a></p>
    <?php
    $req = $pdo->prepare("SELECT * FROM articles ORDER BY created_at DESC");
    $req->execute();
    $articles = $req->fetchAll();
    foreach ($articles as $article):
    ?>
        <article>
            <h2><?= htmlspecialchars($article['title']) ?></h2>
            <p><?= htmlspecialchars($article['content']) ?></p>
            <p>Publié le <?= $article['created_at'] ?></p>
        </article>
    <?php endforeach; ?>
</body>
</html>
