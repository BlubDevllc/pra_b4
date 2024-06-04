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

    $email = $_POST['email'];
    if(empty($email))
    {
        die("Vul een email in");
    }
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === false)
    {
        die("Email ongeldig");
    }

    require_once '../config/conn.php';
    $sql = "SELECT * FROM admins WHERE username = :user";
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

    $query = "INSERT INTO admins (username, password, email) VALUES (:user, :hash, :email)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":user" => $user,
        ":hash" => $hash,
        ":email" => $email
    ]);

    header("Location:../index.php"); //later login.php

    exit;
    
?>