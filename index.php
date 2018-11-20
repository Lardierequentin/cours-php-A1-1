<?php

// echo "Coucou";


/*
 * La fonction "var_dump" est un fonction
 * de débug
 */
var_dump("coucou bob dit l'ane");
var_dump('unexpected_error');

// name <- "bob dit l'ane"
$name = "bob dit l'ane";

// Débug de la variable name
var_dump($name);

// Ici on fait de la concaténation
var_dump("coucou $name");
var_dump("coucou " . $name);

// Ici on fait des addition avec des variables
$a = 10;
$b = 5;
$b = $a + $b;

var_dump($b);

// SI B > 10 ALORS
//    Action
// FINSI
if($b > 10) {
    var_dump("Sup à 10");
}

// SI B = 10 ALORS
//    Action
// SINON
//    Autre action
// FINSI
if($b == 10) {
    var_dump("Ok pour 10");
} else {
    var_dump("Diff de 10");
}

// SI B = 10 ALORS
//    Action
// SINONSI B = 15
//    Autre action
// FINSI
if($b == 10) {
    var_dump("On passera jamais ici !!!");
} else if($b == 15) {
    var_dump("OK pour 15");
}

// Création d'un tableau
// t[10] <- 1, 1100, ...
$t = array(1, 1100, 3);

// Débug du tableau
var_dump($t);

// Accès à une valeur par index du tableau
// ECRIRE t[1]
var_dump($t[1]);

// On affecte 1234 à l'index 3 dans notre tableau
// t[3] <- 1234
$t[3] = 1234;
var_dump($t);


$i = 0;
var_dump($i);

$i = $i + 1;
var_dump($i);

$i += 1;
var_dump($i);

$i++;
var_dump($i);

// POUR I ALLANT DE 0 à 9 PAR PAS DE 1
// Action
// FINPOUR
for($i = 0; $i < 4; $i++) {
    var_dump("t[$i] => " . $t[$i]);
}

/**
 * Compter le nombre de valeurs de ce tableau.
 * Puis l'afficher dans votre terminal.
 */
$list = array(100, 200, 300, 4452, 5345, 643);



























