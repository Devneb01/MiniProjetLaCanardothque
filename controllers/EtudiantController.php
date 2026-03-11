<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['num_carte'])) {
    $data = [
        'num_carte' => $_POST['num_carte'],
        'nom'       => $_POST['nom'],
        'prenom'    => $_POST['prenom'],
        'email'     => $_POST['email']
    ];
    addEtudiant($pdo, $data);
    header('Location: index.php?page=etudiants');
    exit;
}

$etudiants = getAllEtudiants($pdo);
require 'views/etudiants/liste.php';
require 'views/etudiants/ajouter.php';