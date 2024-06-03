<?php

include_once '../config/conn.php';

function createDatabase($conn)
{
    $query = "CREATE TABLE attractions (
        id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        type varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        capacity int NOT NULL,
        openes_on date DEFAULT NULL,
        extra_information varchar(255) NOT NULL,
        photo_name varchar(255) NOT NULL,
        status varchar(255) NOT NULL
      )";


    $statement = $conn->prepare($query);
    $statement->execute([]);

    $query = "CREATE TABLE admins (
        id int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        password varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        email varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
      )";

    $statement = $conn->prepare($query);
    $statement->execute([]);
}


createDatabase($conn);
