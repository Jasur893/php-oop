<?php

require_once 'config/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $title = $_POST['title'];
    $body = $_POST['body'];

    $result = Post::create($title, $body);

    if ($result == 1){
        header("Location: index.php");
        exit;
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>
    <form method="POST" action="">
        <h5>Create Post</h5>
        <div>
            <input type="text" name="title" placeholder="title" >
        </div>
        <div>
            <textarea name="body" placeholder="body" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
