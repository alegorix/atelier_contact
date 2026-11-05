<?php
require_once 'database.php';

// refus d'accès si pas un POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
    header('Location: index.php');
    exit;
}

// nettoyage des espaces résiduels dans les inputs
$nom = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$sujet = trim($_POST['sujet'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validation si pas vide

if ($nom === '' || $email === '' || $sujet === '' || $message === '') {
    header('Location: index.php?status=erreur_vide');
    exit;
}

// Validation si bien adresse mail valide

if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: index.php?status=erreur_email');
    exit;
}

// Insertion en DB
try {

    $sql = "INSERT INTO contacts (nom, email, sujet, message) VALUES (:nom, :email, :sujet, :message)";
    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ':nom' => $nom,
        ':email' => $email,
        ':sujet' => $sujet,
        ':message' => $message,
    ]);

    header('Location: index.php?status=victoire');
    exit;




}catch (PDOException $e) {
    header('Location: index.php?status=erreur_serveur');
    exit;

}



?>