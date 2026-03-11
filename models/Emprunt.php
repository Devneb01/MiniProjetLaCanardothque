<?php
function createEmprunt($pdo, $id_canard, $num_carte, $date_retour) {
    $sql_emprunt = "INSERT INTO emprunter (id_canard, num_carte, date_pret, date_retour_prevue) 
                    VALUES (?, ?, CURDATE(), ?)";
    $stmt1 = $pdo->prepare($sql_emprunt);
    $stmt1->execute([$id_canard, $num_carte, $date_retour]);

    $sql_update = "UPDATE canard SET etat = 'En vadrouille' WHERE id_canard = ?";
    $stmt2 = $pdo->prepare($sql_update);
    $stmt2->execute([$id_canard]);
}
function getAllEmprunts($pdo) {
    $sql = "SELECT e.*, c.nom as canard_nom, et.nom as etudiant_nom, et.prenom as etudiant_prenom 
            FROM emprunter e
            JOIN canard c ON e.id_canard = c.id_canard
            JOIN etudiant et ON e.num_carte = et.num_carte
            ORDER BY e.date_pret DESC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}