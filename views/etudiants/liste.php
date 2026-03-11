
<h1>Liste des Etudiants</h1>

<table border="1">
    <thead>
    <tr>
        <th>Numero de la Carte</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($etudiants as $etudiant): ?>
        <tr>
            <td><?= htmlspecialchars($etudiant['num_carte']) ?></td>
            <td><?= htmlspecialchars($etudiant['nom']) ?></td>
            <td><?= htmlspecialchars($etudiant['prenom']) ?></td>
            <td><?= htmlspecialchars($etudiant["email"])?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>