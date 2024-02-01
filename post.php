<?php

require_once 'config/bootstrap.php';

$post_id = $_GET['id'];

$post = Post::getById($post_id);


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post <?= $post_id  ?></title>
</head>
<body>
    <div>
        <h1><?= $post->id . ' -' . $post->title ?></h1>
        <p><?= $post->body ?></p>
        <small><?= $post->created_at ?></small>
    </div>
</body>
</html>
