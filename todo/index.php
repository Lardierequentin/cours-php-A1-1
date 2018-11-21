<?php
$tasks = array();

$tasks[] = array(
    "status" => false,
    "task" => "Task 1"
);

$tasks[] = array(
    "status" => false,
    "task" => "Task 2"
);

$tasks[] = array(
    "status" => false,
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
    <tr>
        <td>--</td>
        <td>Task 1</td>
        <td><a href="#">check</a></td>
        <td><a href="#">modifier</a></td>
        <td><a href="#">supprimer</a></td>
    </tr>
    <tr>
        <td>OK</td>
        <td>Task ...</td>
        <td><a href="#">check</a></td>
        <td><a href="#">modifier</a></td>
        <td><a href="#">supprimer</a></td>
    </tr>
    </tbody>
</table>
</html>