<?php
require_once '../controller/GestionUsersController.php';
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
    <link rel="stylesheet" href="CSS/voirUsers.css">
    <title>Liste des utilisateurs</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>

        <?php foreach ($users as $user): ?>
        <tr>
            <td>ID : <?= htmlspecialchars($user['id_user']) ?>    </td>
            <td>Email : <?= htmlspecialchars($user['email']) ?>   </br></br></td>
        </tr>
        <?php endforeach; ?>
</body>
</html>
