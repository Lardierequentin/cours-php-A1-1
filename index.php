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

// Une variante de la boulce for
foreach ($t as $key => $value) {
    // "0 => 1"
    var_dump("$key => $value");
}

/**
 * Compter le nombre de valeurs de ce tableau.
 * Puis l'afficher dans votre terminal.
 */
$list = array(100, 200, 300, 4452, 5345, 643);

$count = 0;

// Permet de compter le nombre d'éléments dans un tableau
for($i = 0; $i < 6; $i++) {
    $count++;
}

var_dump($count);

// Fonction qui donne le nombre d'entrées du tableau
var_dump(count($list));

// C'est tableau associatif
$user = array(
    "firstname" => "Bob",
    "lastname" => "Dit l'âne",
    "age" => 30,
    "key" => "valeur"
);

// foreach($user as "firstname" => "Bob")
foreach ($user as $key => $value) {
//    var_dump($user[$key]);
    var_dump("$key => $value");
}

$users = array(
    array(
        "firstname" => "bob",
        "email" => "bob@domain.tld"
    ),
    array(
        "firstname" => "john",
        "email" => "john@domain.tld"
    )
);

var_dump($users);

$jane = array(
    "firstname" => "jane",
    "email" => "jane@domain.tld"
);

//array_push($users, $jane);
$users[] = $jane;

var_dump($users);

/**
 * L'objectif est de compléter le tableau $incompletUsers (ajouter les lastnames)
 * avec le tableau $lastnames
 *
 */
$lastnames = array("Dit l'âne", "doe", "die");

$incompletUsers = array(
    array(
        "firstname" => "bob",
        "email" => "bob@domain.tld"
    ),
    array(
        "firstname" => "john",
        "email" => "john@domain.tld"
    ),
    array(
        "firstname" => "jane",
        "email" => "jane@domain.tld"
    )
);

//$incompletUsers = array(
//    array(
//        "firstname" => "bob",
//        "lastname" => "Dit l'âne",
//        "email" => "bob@domain.tld"
//    ),
//    array(
//        "firstname" => "john",
//        "lastname" => "doe",
//        "email" => "john@domain.tld"
//    ),
//    array(
//        "firstname" => "jane",
//        "lastname" => "die",
//        "email" => "jane@domain.tld"
//    )
//);

foreach ($incompletUsers as $index => $user) {
    $incompletUsers[$index]["lastname"] = $lastnames[$index];
}

var_dump($incompletUsers);

/**
 * Création d'une procédure sans paramètre
 */
function hello() {
    var_dump("Hello");
}

hello();

/**
 * Création d'une procédure avec paramètre
 */
function helloName($name) {
    var_dump("Hello $name");
}

helloName("Bibi");

/**
 * Création d'une procédure avec paramètre par défaut
 */
function helloNameJohnDoe($name = "John doe") {
    var_dump("Hello $name");
}

helloNameJohnDoe();
helloNameJohnDoe("Bob");

/**
 * Création d'une procédure avec paramètre null
 */
function helloNameNull($name = null) {
    var_dump("Hello $name");
}

helloNameNull();

$person = array(
    "firstname" => "john",
    "lastname" => "doe"
);

function helloArray($user) {
    var_dump("Hello " . $user["firstname"] . " "  . $user["lastname"]);
}

helloArray($person);


/**
 * Reprendre la fonction helloArray :
 * - Contrôler que le firtname et lastname sont bien remplis
 * - Afficher le message "Des champs sont obligatoires (...)"
 * - Afficher les firstname et lastname avec la première lettre
 * en majuscule et le reste en minuscule
 *
 * firstname => john
 * firstname => dOE
 *
 * => Hello John Doe
 */

//// Déclaration d'un tableau (liste de personnes)
//$persons = array();
//
//// Déclaration d'un tableau associatif pour une personne
//$personJohn = array(
//    "username" => "john",
//    "email" => "john@domain.tld"
//);
//
//// Ajout d'une personne dans mon premier tableau (la liste)
//$persons[] = $personJohn;
//
//var_dump("=================== persons ====================");
//var_dump($persons);
//
//$personJane = array(
//    "username" => "jane",
//    "email" => "jane@domain.tld"
//);
//
//$persons[] = $personJane;
//
//var_dump($persons);




