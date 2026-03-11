<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom'])) {
    $data = [
        'nom'  => $_POST['nom'],
        'type' => $_POST['type'],
        'etat' => $_POST['etat']
    ];
    addCanard($pdo, $data);
    header('Location: index.php?page=canards');
    exit;
}

$canards = getAllCanards($pdo);
require 'views/canards/liste.php';
require 'views/canards/ajouter.php';