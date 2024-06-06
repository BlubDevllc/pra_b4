<?php
include_once "../config/conn.php";

session_start();

enum STATUS
{
    case USER_EXISTS;
    case SUCESSS;
    case USER_NOT_FOUND;
    case WRONG_PASSWORD;
}

function registerUser($username, $email, $password, $conn)
{
    $query = "SELECT * FROM admins WHERE email=:email";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":email" => $email
    ]);
    if ($statement->rowCount() > 0) {
        return STATUS::USER_EXISTS;
    }

    $query = "INSERT INTO admins (username, email, password) VALUES(:username, :email, :password)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":email" => $email,
        ":username" => $username,
        ":password" => password_hash($password, PASSWORD_DEFAULT)
    ]);

    return STATUS::SUCESSS;
}

function loginUser($email, $password, $conn)
{
    $query = "SELECT * FROM admins WHERE email=:email";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":email" => $email
    ]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if (!$user)
        return STATUS::USER_NOT_FOUND;

    if (password_verify($password, $user["password"]))
    {
        $_SESSION["admin_id"] = $user["id"];
        $_SESSION["admin_username"] = $user["username"];
        return STATUS::SUCESSS;
    }

    return STATUS::WRONG_PASSWORD;
}

if ($_POST["action"] == "register")
{
    if ($_POST["password"] != $_POST["password_check"])
    {
        header("Location: ../auth/register.php?msg=Wachtwoord herhaling is niet dezelfde als jouw wachtwoord!");
        die();
    }

    $status = registerUser($_POST["user"], $_POST["email"], $_POST["password"], $conn);

    if ($status == STATUS::SUCESSS)
    {
        header("Location: ../auth/login.php?msg=Je mag nu inloggen!");
        die();
    }

    if ($status == STATUS::USER_EXISTS)
    {
        header("Location: ../auth/register.php?msg=Email bestaat al!");
        die();
    }
}

if ($_POST["action"] == "login")
{
    $status = loginUser($_POST["email"], $_POST["password"], $conn);

    if ($status == STATUS::SUCESSS)
    {
        header("Location: ../index.php");
        die();
    }

    if ($status == STATUS::USER_NOT_FOUND)
    {
        header("Location: ../auth/login.php?msg=Account niet gevonden!");
        die();
    }
}

header("../index.php");
die();

