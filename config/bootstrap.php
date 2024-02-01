<?php

require_once 'autoload.php';

$database = new Database('127.0.0.1', 'oop-php', 'root', '');
$pdo = $database->connect();
Post::$pdo = $pdo;



