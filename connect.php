<?php

$hostname = "localhost";
$base = "pweb_voiture";
$loginBD = "root";
$passBD = "root";

try {
    $pdo = new PDO ("mysql:server=$hostname; dbname=$base", "$loginBD", "$passBD");
} catch (PDOException $e) {
    die  ("Echec de connexion : " . utf8_encode($e->getMessage()) . "\n");
}
?>
