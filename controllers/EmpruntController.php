<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    createEmprunt($pdo, $_POST['id_canard'], $_POST['num_carte'], $_POST['date_retour']);
    header("Location: index.php?page=canards");
    exit();
}

$canards_disponibles = getAvailableCanards($pdo);
$etudiants = getAllEtudiants($pdo);
require 'views/emprunts/creer.php';