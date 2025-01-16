<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>

<body>
    <section>
        <article id="connexion-admin-title">
                <h1>Connexion</h1>
        </article>
        <article>
        <form method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" minlength = 1 maxlength = 50 placeholder = "Ton mail...">
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
</body>
</html>