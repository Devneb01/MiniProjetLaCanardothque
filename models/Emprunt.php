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