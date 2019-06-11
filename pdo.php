<?php

$pdo = new PDO(
    "mysql:host=localhost;dbname=wikies",
    "moussdev",
    "password"
);

$categories = $pdo->query('SELECT * FROM categorie')->fetchAll();