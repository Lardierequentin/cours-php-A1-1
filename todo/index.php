<?php
$tasks = array();

$tasks[] = array(
    "status" => false,
    "task" => "Task 1"
);

$tasks[] = array(
    "status" => true,
    "task" => "Task 2"
);

$tasks[] = array(
    "status" => true,
    "task" => "Task 3"
);

?><!doctype html>
<html lang="en">
<body>

</body>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<form action="">
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
    <?php foreach ($tasks as $task): ?>
        <tr>
            <!-- Ceci est presque comme une condition. C'est un ternaire -->
            <td><?php echo $task["status"] ? "+" : "-" ?></td>
            <td><?php echo $task["task"] ?></td>
            <td><a href="#">check</a></td>
            <td><a href="#">modifier</a></td>
            <td><a href="#">supprimer</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</html>