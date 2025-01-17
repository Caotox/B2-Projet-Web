<?php
require_once '../controller/GestionUsersController.php';
$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user_id'])) {
    $userController->supprimerUser((int)$_POST['delete_user_id']);
}
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
    <table>
        <?php foreach ($users as $user): ?>
        <tr>
            <td>ID : <?= htmlspecialchars($user['id_user']) ?></td>
            <td>Email : <?= htmlspecialchars($user['email']) ?></td>
            <td>
                <form method="POST" action="">
                    <input type="checkbox" id="delete_<?= $user['id_user'] ?>" name="confirm_delete" required>
                    <label for="delete_<?= $user['id_user'] ?>">Confirmer la suppression</label>
                    <input type="hidden" name="delete_user_id" value="<?= htmlspecialchars($user['id_user']) ?>">
                    <button type="submit" name="delete">Supprimer</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
