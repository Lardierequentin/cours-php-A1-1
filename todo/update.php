<?php
session_start();

var_dump($_GET);
var_dump($_SESSION);

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php include 'layout/header.php'  ?>

<form action="" method="post">
    <input type="text" name="task" value="<?php echo "..." ?>">
    <button type="submit">OK</button>
</form>

<?php include 'layout/footer.php'  ?>
</body>
</html>