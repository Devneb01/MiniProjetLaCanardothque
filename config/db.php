<?php
$dsn = 'mysql:host=localhost;port=3307;dbname=la_canardotheque;charset=utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $pdo = new PDO($dsn, 'root', 'admin', $options);
} catch (PDOException $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}