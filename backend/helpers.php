<?php

include_once "../config/conn.php";

function fetchCurrentAttractions($conn)
{
    $query = "SELECT * FROM attractions";

    $statement = $conn->prepare($query);
    $statement->execute([]);
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}