<?php
require_once '../controller/GestionUsersController.php';
echo "yessss";
$userController = new UserController();
$action = 'voirUsers';

$users = [];
if (isset($_GET['action']) && $_GET['action'] === 'voirUsers') {
    echo "ça passe ici";
    $users = $userController->afficherTousLesUsers(); 
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
            </tr>
        </thead>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id_user']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?></td>
            <td>
                <a href="GestionFormulaires.php?action=voirUsers&id=<?= htmlspecialchars($user['id']) ?>">Voir</a>
            </td>
        </tr>
        <?php endforeach; ?>
</body>
</html>
