<?php
    ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'config/db.php';
require_once 'models/Canard.php';
require_once 'models/Etudiant.php';
require_once 'models/Emprunt.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'canards';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>La Canardothèque</title>
</head>
<body>
<nav>
    <a href="index.php?page=canards">Gérer les Canards</a> |
    <a href="index.php?page=etudiants">Gérer les Étudiants</a> |
    <a href="index.php?page=emprunter">Adopter un Canard</a>
</nav>
<hr>

<?php
switch ($page) {
    case 'etudiants':
        require_once 'controllers/EtudiantController.php';
        break;
    case 'emprunter':
        require_once 'controllers/EmpruntController.php';
        break;
    case 'canards':
    default:
        require_once 'controllers/CanardController.php';
        break;
}
?>
</body>
</html>