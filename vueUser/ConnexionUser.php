<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <meta name = "description" content = "La page connexion des Users">
    <meta name = "author" content = "MEZIANE Yanis">
    <link rel="stylesheet" href="./vueUser/CSS/connexionUser.css">
    <title>Connexion</title>
</head>
<body>

        <main>
            <section id = "connexionSection">
                <article class = "connexionBlock">
                    <h1>Connexion</h1>
                </article>
                <article class = "connexionBlock">
                    <p>
                        Bienvenue sur <strong>L'amour Ouf</strong> ! 
                    </p>
            <br>
                    <p>
                        Découvrez en un clic vos meilleures comptabilités avec nos experts en amour !
                    </p>
                </article>

                <article>
                    <form method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" minlenght = 1 maxlength = 50 placeholder = "Ton mail...">
            <br>
                        <label for="mdp">Mot de Passe</label>
                        <input type="password" name="mdp" id="mdp" minlength = 6 maxlength = 50 placeholder = "Ton Mot De Passe...">
            <br>
                <article id="submitButton">
                    <input type="submit" value="Soumettre">
                </article>
                    </form>
                </article>
            </section>
        </main>
    </body>
</html>
