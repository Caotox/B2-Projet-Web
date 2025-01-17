<?php
require_once '../controller/GestionFormController.php';
require_once '../controller/GestionUsersController.php';

$userController = new UserController();
$formulaireController = new GestionFormulairesController();


$users = [];
if (isset($_GET['action']) && $_GET['action'] === 'voirUsers') {
    $users = $userController->afficherTousLesUsers(); 
}


$resultats = null;
if (isset($_GET['id_user'])) {
    $resultats = $formulaireController->afficherResultats($_GET['id_user']);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des formulaires</title>
</head>
<body>
    <h1>Gestion des formulaires</h1>
    <a href="voirUsers.php">Voir les utilisateurs</a>
        <div class="test-title">Test 1 : Test de compatibilité amoureuse</div>
        <div class="test-options">
            <a href="../vueAdmin/FormAdmin.php">Voir le test</a>
            <a href="#">Modifier le test</a>
            <a href="GestionFormulaires.php?action=voirUsers">Voir les résultats du test</a>
        </div>

        <?php if (!empty($users)): ?>
                <thead>
                    <tr>
                        <th>ID Utilisateur</th>
                        <th>Email</th>
                        <th>Voir les résultats</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id_user']) ?></td>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td>
                                <a href="GestionFormulaires.php?action=voirUsers&id=<?= htmlspecialchars($user['id']) ?>">Voir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        <?php elseif (isset($_GET['action']) && $_GET['action'] === 'voirUsers'): ?>
            <p>Aucun utilisateur n'a fait le test.</p>
        <?php endif; ?>

        <?php if ($resultats !== null): ?>
            <?php if (is_array($resultats)): ?>
                    <thead>
                        <tr>
                            <th>Compatibilité</th>
                            <th>Test ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($resultats as $resultat): ?>
                            <tr>
                                <td><?= htmlspecialchars($resultat['comptabilite']) ?></td>
                                <td><?= htmlspecialchars($resultat['id_test']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            <?php else: ?>
                <?= $resultats; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>
