<?php
$serveur="localhost";
$base="Jeux";
$user ="root";
$pass="root";

try {
    $dns="mysql:host=$serveur;dbname=$base";
    $conn = new PDO ($dns, $user, $pass);
    echo 'ok';
} catch (Exception $e) {
    echo "connexion mysql impossible:", $e->getMessage();
    die();
}