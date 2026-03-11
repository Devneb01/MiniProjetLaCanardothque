<h1>Liste des Canards</h1>
<table border="1">
    <thead>
    <tr>
        <th>Nom</th>
        <th>Type</th>
        <th>État</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($canards as $canard): ?>
        <tr>
            <td><?= htmlspecialchars($canard['nom']) ?></td>
            <td><?= htmlspecialchars($canard['type']) ?></td>
            <td>
                <?= htmlspecialchars($canard['etat']) ?>
                <?php if ($canard['etat'] === 'Dans la mare'): ?>
                    <br>
                    <a href="index.php?page=emprunter&id=<?= $canard['id_canard'] ?>">[Adopter]</a>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>