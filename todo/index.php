<?php
require_once 'libs/functions.php';

session_start();

// Permet de supprimer toutes les entrée de la session.
if(isset($_GET['clean']) && $_GET['clean'] == '1') {
    session_destroy();

    redirection();
}

if(!empty($_POST['task-modified']) && isset($_POST['task-index'])) {
    $_SESSION['tasks'][$_POST['task-index']]['task'] = $_POST['task-modified'];
}

// Création d'un tableau dans la session avec la clé "tasks"
if(!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = array();
}

// Vérification que l'on reçoit une tâche à partir de la clé task du formulaire
// On créer la tâche dans le tableau
if(!empty($_POST["task"])) {
    // Ajout d'un nouveau tableau dans notre tableau de tâches ($tasks)
//    $tasks[] = array(
//        "status" => false,
//        "task" => $_POST["task"]
//    );

    $found = false;

    foreach ($_SESSION['tasks'] as $task) {
        if($task['task'] == $_POST["task"]) {
            $found = true;
        }
    }

    if($found === false) {
        $_SESSION["tasks"][] = array(
            "status" => true,
            "task" => $_POST["task"]
        );
    } else {
        $taskName = $_POST["task"];
        $_SESSION["error"] = "Vous avez déjà une tâche avec le nom : $taskName";
    }

    redirection();
}

if(isset($_GET["update"])) {
    $index = $_GET["update"];
    $_SESSION["tasks"][$index]["status"] = !$_SESSION["tasks"][$index]["status"];

    redirection();
}

if(isset($_GET["delete"])) {
    $index = $_GET["delete"];
    unset($_SESSION["tasks"][$index]);

    redirection();
}

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<div class="container">
    <?php include 'layout/header.php'?>

    <form class="form-inline" action="" method="post">
        <input class="form-control mb-2 mr-sm-2" type="text" name="task" placeholder="Saisir une tâche...">
        <button type="submit" class="btn btn-primary mb-2">OK</button>
        <a href="?clean=1" class="btn btn-danger mb-2">Clean</a>
    </form>
    <table class="table">
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
        <?php if(count($_SESSION["tasks"])): ?>
            <?php foreach ($_SESSION["tasks"] as $index => $task): ?>
                <tr>
                    <!-- Ceci est presque comme une condition. C'est un ternaire -->
<!--                    <td>--><?php //echo $task["status"] ? "+" : "-" ?><!--</td>-->
                    <td>
                        <?php if($task["status"]): ?>
                            <i class="fas fa-times"></i>
                        <?php else: ?>
                            <i class="fas fa-check"></i>
                        <?php endif ?>
                    </td>

                    <td><?php echo $task["task"] ?></td>
                    <td><a class="btn btn-secondary" href="?update=<?php echo $index ?>">check</a></td>
                    <td><a class="btn btn-info" href="update.php?index=<?php echo $index ?>">modifier</a></td>
                    <td><a class="btn btn-danger" href="?delete=<?php echo $index ?>">supprimer</a></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">Aucune tâche, veuillez en saisir une...</td>
            </tr>
        <?php endif ?>
        </tbody>
    </table>

    <?php include 'layout/footer.php'; ?>
</div>
</html>