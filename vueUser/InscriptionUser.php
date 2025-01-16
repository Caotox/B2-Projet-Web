<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name = "description" content = "La page connexion des Users">
    <meta name = "author" content = "MEZIANE Yanis">
    <link rel="stylesheet" href="./vueUser/CSS/connexionUser.css">
    <title>Inscription</title>
</head>

<main>
<body>
    <section id = "connexionInscriptionSection">
        <article class="connexionInscriptionBlock">
                <h1>Inscription</h1>
        </article>
        <article class = "connexionInscriptionBlock">
            <p>
                Bienvenue sur <strong>L'amour Ouf</strong>, et découvrez en un clic vos meilleures comptabilités avec nos experts en amour !
            </p>
        </article>

        <article>
            <form method="POST">

                    <!--<input type="text" name="firstname" id="firstname" minlength = 1 maxlength = 50 placeholder = "Ton prénom...">
                <br>
                    <input type="text" name="lastname" id="lastname" minlength = 1 maxlength = 50 placeholder = "Ton nom...">-->
                <br>
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" minlenght = 1 maxlength = 50 placeholder = "Ton mail...">
                <br>
                <label for="mdp">Mot de Passe</label>
                    <input type="password" name="mdp" id="mdp" minlength = 6 maxlength = 50 placeholder = "Ton Mot De Passe...">
                <br>
                    <!--<input type="password" name="conf_password" id="conf_password" minlength = 6 maxlength = 50 placeholder = "Confirmation de ton Mot De Passe...">-->
                <br>
                    <article>
                        <input type="submit" value="Soumettre">
                    </article>
            </form>
        </article>
    </section>
</main>
</body>
</html>