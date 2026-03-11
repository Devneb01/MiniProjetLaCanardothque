<h1>Adopter un Canard</h1>
<form method="POST">
    <label>Canard :</label>
    <select name="id_canard">
        <?php foreach ($canards_disponibles as $c): ?>
            <option value="<?= $c['id_canard'] ?>" <?= (isset($_GET['id']) && $_GET['id'] == $c['id_canard']) ? 'selected' : '' ?>>
                <?= htmlspecialchars($c['nom']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Étudiant :</label>
    <select name="num_carte">
        <?php foreach ($etudiants as $e): ?>
            <option value="<?= $e['num_carte'] ?>">
                <?= htmlspecialchars($e['nom'] . " " . $e['prenom']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label>Retour prévu :</label>
    <input type="date" name="date_retour" required>

    <button type="submit">Confirmer l'adoption</button>
</form>