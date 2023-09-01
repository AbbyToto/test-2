<?php
include_once "Person.php";
$peter = new Personne();

$peter ->setName("Peter c'est une personne");
echo $peter -> getName();

?>
// changes cursor -> index.php ->+
// git commit -m "creation class personne et affichage sur index"
// git add .
// git pull
// git push