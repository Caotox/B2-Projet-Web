<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <section>
        <article id="inscription-title">
                <h1>Inscription</h1>
        </article>
        <article>
            <form action="" method="POST">

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
                    <input type="submit" value="Soumettre">
            </form>
        </article>
    </section>
</body>
</html>