<?php
//    var_dump($_GET);

$errors = array();

if (empty($_GET["lastname"])) {
    $errors[] = "Saisir un lastname";
}

if (empty($_GET["firstname"])) {
    $errors[] = "Saisir un firstname";
}

// URL/?firstname=john&lastname=doe
$firstname = ucfirst(strtolower($_GET["firstname"]));
$lastname = ucfirst(strtolower($_GET["lastname"]));
?><!doctype html>
<html lang="en">
<body>
<?php
//    if(!empty($errors)) {
//        foreach ($errors as $msg) {
//            echo "<p>$msg</p>";
//        }
//    }
?>

<?php if (!empty($errors)): ?>
    <?php foreach ($errors as $msg): ?>
        <p><?php echo $msg; ?></p>
    <?php endforeach; ?>
<?php endif; ?>

<?php if (count($errors) < 2): ?>
    <h1>Coucou <?php echo $firstname . " " . $lastname; ?></h1>
<?php endif; ?>
</body>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
</html>