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
            <a href="#">Voir les résultats du test</a> 

            <!-- donc là c'est censé faire en sorte que on voit une liste des Users et qu'on peut cliquer sur un User pour voir -->
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