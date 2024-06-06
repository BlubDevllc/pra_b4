<?php
session_start();
require_once 'config.php';


$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username = :username";
$statement = $conn->prepare($query);
$statement->execute([
    ':username' => $username
]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

if ($statement->rowCount() < 1){
    header("Location: ../auth/login.php?msg=Gebruikersnaam bestaat niet");
    exit;
}

if (!password_verify($password, $user['password'])){
    header("Location: ../auth/login.php?msg=Wachtwoord is onjuist");
    exit;
}

$_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username'];
header("Location: ../../index.php");