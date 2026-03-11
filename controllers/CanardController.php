<?php
$canards = getAllCanards($pdo);
require 'views/canards/liste.php';
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = [
        'nom'  => $_POST['nom'],
        'type' => $_POST['type'],
        'etat' => $_POST['etat']];
    addCanard($pdo,$data);
    header('Location: index.php');
    exit;


}else(require 'views/canards/ajouter.php');
