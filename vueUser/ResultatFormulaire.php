<link rel="stylesheet" href="CSS/ResultatFormulaire.css">

<?php
session_start();
//require '..controller/controllerAmourOuf.php';
//$var = new Controller();

function AfficherResultat($resultat) {
    if ($resultat == 'Antoine') {
        $comptabilite=3;
        $degre=1;
        echo "<section class ='boxResultat'>";
            echo "<article class= 'elemInResult'>";
                echo "<h1 id='title'>Votre êtes plus proche que vous ne le pensez avec votre âme sœur</h1>";
                    echo "<img src='CSS/photo_antoine_site.png' alt='photo' class='photo'>";
                    echo "<p>Vous êtes le plus compatible avec : Antoine</p>";
                    echo "<br>";
                    echo "<p>
                            <em> 
                                Dans la douceur d'un matin d'automne, ses yeux racontent une histoire silencieuse. Antoine, homme aux regards tendres, porte en lui une sensibilité rare. Sa main effleure délicatement celle de l'autre, comme une promesse muette. Chaque sourire est une confidence, chaque regard une caresse. Il aime simplement, profondément, sans grand mot mais avec une intensité qui fait battre les cœurs.
                            </em>
                        </p>";
                    echo "<a href='FormulaireUser.php'>Recommencer</a>";
            echo "</article>";
        echo "</section>";

    } elseif ($resultat == 'Yanis') {
        $comptabilite=2;
        $degre=1;
        echo "<section class ='boxResultat'>";
            echo "<article class= 'elemInResult'>";
                echo "<h1 id='title'>Votre êtes plus proche que vous ne le pensez avec votre âme sœur</h1>";
                    echo "<img src='CSS/photo_yanis_site.jpg' alt='photo' class='photo'>";
                    echo "<p>Vous êtes le plus compatible avec : Yanis</p>";
                    echo "<br>";
                    echo "<p>
                            <em> 
                                Dans la lumière de ses yeux, une histoire se dessine. Chaque regard est une promesse, chaque sourire une invitation. Elle porte en elle une grâce secrète, une beauté qui ne se raconte pas mais se ressent. Son âme vibre d'une mélodie douce et puissante, comme un murmure qui traverse le temps. Elle est ce moment rare où la tendresse devient poésie, où l'amour se fait silence et présence.
                            </em>
                        </p>";
                    echo "<a href='FormulaireUser.php'>Recommencer</a>";
            echo "</article>";
        echo "</section>";
    } elseif ($resultat == 'Jessica') {
        $comptabilite=1;
        $degre=1;
        echo "<section class ='boxResultat'>";
        echo "<article class= 'elemInResult'>";
            echo "<h1 id='title'>Votre êtes plus proche que vous ne le pensez avec votre âme sœur</h1>";
                echo "<img src='CSS/photo_jessica_site.jpg' alt='photo' class='photo'>";
                echo "<p>Vous êtes le plus compatible avec : Jessica </p>";
                echo "<br>";
                echo "<p>
                        <em> 
                            Dans les terres desolées de la Terre du milieu, vivait une créature au milieu des rochers et des forêts boisées. Et non je ne parle pas de Gollum, je parle bien de Jessica. Elle se nourrit à longueur de journées de poisson frais et de tulipes. Elle adore aussi les pizzas (sans viande) mais préfère bouffer de l'herbe all day long. Bref avec elle, vous vous ennuirez toute la nuit, puisqu'elle voudra vous faire écrire son texte à sa place.
                        </em>
                    </p>";
                echo "<a href='FormulaireUser.php'>Recommencer</a>";
        echo "</article>";
    echo "</section>";
    } else {
        
        echo "<h1>Résultat</h1>";
        echo "<p>Vous êtes le plus compatible avec : Personne</p>";
        echo "<a href='./FormulaireUser.php'>Recommencer</a>";
    }
}


if (isset($_GET['resultat'])) {
    $resultat = htmlspecialchars($_GET['resultat']);
    AfficherResultat($resultat);
} else {
    echo "<h1>Erreur</h1>";
    echo "<p>Aucun résultat trouvé.</p>";
    echo "<a href='FormulaireUser.php'>Retour au formulaire</a>";
} 

//$var->enregistrerResultat();

?>

<div class="love-advice-button">
            <a href="ConseilsLove.html" class="btn-love-advice">Si vous voulez des conseils en amour, cliquez-ici !</a>
</div>