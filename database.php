<?php
//config générale
$host = 'localhost';
$db = 'atelier_contact';
$user = 'root';
$password = '';
$charset = 'utf8mb4';

$connexion = "mysql:host=$host;dbname=$db;charset=$charset;";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //Déclenche les exceptions en cas d'erreurs SQL
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //Retourne des tableaux multidimensionels associatifs
    PDO::ATTR_EMULATE_PREPARES => false, // Vraies requêtes préparées
];

try {
    $pdo = new PDO($connexion, $user, $password, $options);
} catch (PDOException $e) {
    die("Erreur de connexion à la DB : " . $e->getMessage());
}



?>