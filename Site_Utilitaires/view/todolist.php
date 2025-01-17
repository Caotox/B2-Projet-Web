<h1>Ma Todolist</h1>
<a href="?route=accueil">Retour à l'accueil</a>
<?php foreach ($list as $lists) { ?>
    <div>
            <p>Tâche : <?= htmlspecialchars($lists['task']) ?></p>
            <label for="done-<?= $lists['id_list'] ?>">Fait :</label>
            <input type="checkbox" id="done-<?= $lists['id_list'] ?>" <?= $lists['done'] ? 'checked' : '' ?> disabled>   
            <form method="POST">         
                <input type="hidden" name="id_task" value="<?= $lists['id_list'] ?>">
                <button type="submit" name="delete">Supprimer</button>
            </form>

    </div>
<?php } ?>


<form method="POST">
    <label for="task">Tâche à faire</label>
    <input type="text" name="task" id="task" required>
    <label for="done">Fait</label>
    <input type="checkbox" name="done" id="done">
    <button type="submit">Ajouter</button>
</form>