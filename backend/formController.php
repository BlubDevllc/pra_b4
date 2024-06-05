<?php

    include_once "../config/conn.php";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];
    $info = $_POST['info'];

    $query = "INSERT INTO contact(name, email, reason, description) VALUES(:name, :email, :reason, :description)";
    $statement = $conn->prepare($query);
    $statement->execute([
        ":name" => $name,
        ":email" => $email,
        ":reason" => $reason,
        ":description" => $info
    ]);

    header("Location: ../contact.php?msg=formulierVerstuurd!");

    exit;
?>