<?php  
    //session_start();
    if(isset($_SESSION['user_id']))
    {
        die("Kan niet registreren - je bent al ingelogd");
    }

    $user = $_POST['user'];
    if(empty($user))
    {
        die("Vul een username in");
    }

    require_once 'conn.php';
    $sql = "SELECT * FROM users WHERE username = :user";
    $statement = $conn->prepare($sql);
    $statement->execute([":user" => $user]);
    if($statement->rowCount() > 0)
    {
        die("Username is al in gebruik");
    }

    $password = $_POST['password'];
    $password_check = $_POST['password_check'];
    if($password != $password_check)
    {
        die("Wachtwoorden zijn niet gelijk");
    }

    if(empty($password))
    {
        die("Wachtwoord mag niet leeg zijn");
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES (:user, :hash)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":user" => $user,
        ":hash" => $hash,
    ]);

    header("Location:../index.php"); //later login.php

    exit;
    
?>