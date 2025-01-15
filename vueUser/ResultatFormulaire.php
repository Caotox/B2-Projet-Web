<?php

function AfficherResultat($resultat) {
    if ($resultat == 'Antoine') {
        echo "<h1>Résultat</h1>";
        echo "<p>Vous êtes le plus compatible avec : Antoine</p>";
        echo "<a href='FormulaireVue.php'>Recommencer</a>";
    } elseif ($resultat == 'Yanis') {
        echo "<h1>Résultat</h1>";
        echo "<p>Vous êtes le plus compatible avec : Yanis</p>";
        echo "<a href='FormulaireVue.php'>Recommencer</a>";
    } elseif ($resultat == 'Jessica') {
        echo "<h1>Résultat</h1>";
        echo "<p>Vous êtes le plus compatible avec : Jessica</p>";
        echo "<a href='FormulaireVue.php'>Recommencer</a>";
    } else {
        echo "<h1>Résultat</h1>";
        echo "<p>Vous êtes le plus compatible avec : Personne</p>";
        echo "<a href='FormulaireVue.php'>Recommencer</a>";
    }
}

?>


 <!-- faire le FRONT END de la page de résultat -->