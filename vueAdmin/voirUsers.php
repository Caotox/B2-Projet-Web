<?php
require_once '../controller/GestionUsersController.php';
<<<<<<< HEAD
=======
echo "yessss";
>>>>>>> refs/remotes/origin/main
$userController = new UserController();
$action = 'voirUsers';

$users = [];
if ($action === 'voirUsers') {
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
<<<<<<< HEAD
=======
            <td>
                <a href="GestionFormulaires.php?action=voirUsers&id=<?= htmlspecialchars($user['id']) ?>">Voir</a>
            </td>
>>>>>>> refs/remotes/origin/main
        </tr>
        <?php endforeach; ?>
</body>
</html>
