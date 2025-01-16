<link rel="stylesheet" href="CSS/ResultatFormulaire.css">

<?php

function AfficherResultat($resultat) {
    if ($resultat == 'Antoine') {
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
        echo "<section class ='boxResultat'>";
        echo "<article class= 'elemInResult'>";
            echo "<h1 id='title'>Votre êtes plus proche que vous ne le pensez avec votre âme sœur</h1>";
                echo "<img src='CSS/photo_jessica_site.jpg' alt='photo' class='photo'>";
                echo "<p>Vous êtes le plus compatible avec : Jessica </p>";
                echo "<br>";
                echo "<p>
                        <em> 
                            Dans la douceur du crépuscule, elle apparaît comme une vision. Ses yeux, reflets d'un ciel étoilé, racontent mille histoires silencieuses. Chaque geste est une danse, chaque mot une mélodie. Elle porte en elle la grâce d'un printemps éternel, faisant fleurir l'amour sur son passage. Son sourire, tel un rayon de soleil, réchauffe les cœurs les plus froids. Auprès d'elle, le temps suspend son vol, et le monde entier semble s'arrêter pour l'admire
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

?>

 <!-- faire le FRONT END de la page de résultat -->