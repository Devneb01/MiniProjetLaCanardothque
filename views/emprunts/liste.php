<h1>Tableau des Adoptions</h1>

<table border="1">
    <thead>
    <tr>
        <th>Canard</th>
        <th>Emprunteur</th>
        <th>Date de prêt</th>
        <th>Retour prévu</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($emprunts as $e): ?>
        <tr>
            <td><?= htmlspecialchars($e['canard_nom']) ?></td>
            <td><?= htmlspecialchars($e['etudiant_nom'] . ' ' . $e['etudiant_prenom']) ?></td>
            <td><?= htmlspecialchars($e['date_pret']) ?></td>
            <td><?= htmlspecialchars($e['date_retour_prevue']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>