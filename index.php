<?php

require_once 'config/bootstrap.php';

$posts = Post::getAll();


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OOP Post</title>
</head>
<body>
    <h1>OOP Post</h1>
    <a href="create.php">Create Post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
        <a href="post.php?id=<?= $post->id ?>"> <h4><?= $post->id . ' ' .  $post->title?></h4></a>
        <li><?= $post->body ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>



