<?php
session_start();

// $_SESSION["name"] = "john";
// $_SESSION["tasks"][] = array(
//         "status" => true,
//         "task" => "Tâche 1"
// );
//session_destroy();
//$_SESSION["tasks"][0]["status"] = false;

//        unset($_SESSION["tasks"][0]);

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>
    <?php var_dump($_SESSION) ?>
</pre>
</body>
</html>