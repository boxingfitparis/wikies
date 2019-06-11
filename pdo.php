<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=wikies",
    "moussdev",
    "password"
);


$user = $pdo->query('SELECT * FROM user')->fetchAll();