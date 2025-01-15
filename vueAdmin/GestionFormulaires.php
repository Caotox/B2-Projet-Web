<?php

require_once 'vueUser/FormulaireUser.php';

?>


<body>
    <h1> Gestion des formulaires </h1>
    <ul>
        <div class="test">
        <div class="test-title">Test 1 : Test de compatibilité amoureuse</div>
        <div class="test-options">
            <a href="FormulaireUser.php">Voir le test</a>
            <a href="#">Modifier le test</a>
            <a href="index.php?action=voirUsers">Voir les résultats du test</a>

    <?php if (isset($_GET['action']) && $_GET['action'] === 'voirUsers'): ?>
        <table>
            <thead>
                <tr>
                    <th>ID Utilisateur</th>
                    <th>Voir les résultats</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['id_user']) ?></td>
                            <td>
                                <a href="index.php?action=afficherResultats&id=<?= htmlspecialchars($user['id_user']) ?>">Voir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="2">Aucun utilisateur n'a fait le test.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    <?php endif; ?>
            
            <?php /* foreach ($resultats as $resultat): ?>
                <tr>
                    <td><?= htmlspecialchars($resultat['id_user']) ?></td>
                    <td><?= htmlspecialchars($resultat['comptabilite']) ?></td>
                    <td><?= htmlspecialchars($resultat['degre']) ?></td>
                </tr>
            <?php endforeach; */ ?>
        </div>
    </div>
    </ul>

    <h2> Voir les Users qui ont rempli le formulaire </h2>
    <!-- faire avec bdd etc -->
</body>

<?php 

?>