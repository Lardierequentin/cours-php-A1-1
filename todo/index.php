<?php
// Création d'un tableau
$tasks = array();

// Vérification que l'on reçoit une tâche à partir de la clé task du formulaire
if(!empty($_POST["task"])) {
    // Ajout d'un nouveau tableau dans notre tableau de tâches ($tasks)
    $tasks[] = array(
        "status" => false,
        "task" => $_POST["task"]
    );
}

if(isset($_GET["update"])) {
    $index = $_GET["update"];
    $tasks[$index]["status"] = false;
}

if(isset($_GET["delete"])) {
    $index = $_GET["delete"];
    unset($tasks[$index]);
}

?><!doctype html>
<html lang="en">
<body>

</body>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<!--<pre>-->
<!--    --><?php //var_dump($tasks) ?>
<!--</pre>-->
<form action="" method="post">
    <input type="text" name="task" placeholder="Saisir une tâche...">
    <button type="submit">OK</button>
</form>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Nom de la tâche</th>
        <th>Checker</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    </thead>
    <tbody>
    <?php if(count($tasks)): ?>
    <?php foreach ($tasks as $index => $task): ?>
        <tr>
            <!-- Ceci est presque comme une condition. C'est un ternaire -->
            <td><?php echo $task["status"] ? "+" : "-" ?></td>
            <td><?php echo $task["task"] ?></td>
            <td><a href="?update=<?php echo $index ?>">check</a></td>
            <td><a href="#">modifier</a></td>
            <td><a href="?delete=<?php echo $index ?>">supprimer</a></td>
        </tr>
    <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="5">Aucune tâche, veuillez en saisir une...</td>
        </tr>
    <?php endif ?>
    </tbody>
</table>
</html>