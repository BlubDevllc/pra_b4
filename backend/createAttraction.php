<?php

include_once "../config/conn.php";

function createAttraction($conn, $name, $type, $extra_information, $capacity, $status, $photo_name, $opened_on, $under_maintenance)
{
    $query = "INSERT INTO attractions (name, type, capacity, openes_on, extra_information, photo_name, status, under_maintenance)
              VALUES(:name, :type, :capacity, :openes_on, :extra_information, :photo_name, :status, :under_maintenance)";

    $statement = $conn->prepare($query);

    $statement->execute([
        ':name' => $name,
        ':type' => $type,
        ':extra_information' => $extra_information,
        ':capacity' => $capacity,
        ':status' => $status,
        ':photo_name' => $photo_name,
        ':openes_on' => $opened_on,
        ':under_maintenance' => $under_maintenance
    ]);
}


$name = $_POST["name"];
$type = $_POST["type"];
$extra_information = $_POST["extra_information"];
$capacity = $_POST["capacity"];
$status = $_POST["status"];
$openes_on = $_POST["openes_on"];
$under_maintenance = $_POST["under_maintenance"];

$photo_name = null;

if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
    $target_dir = "../assets/";
    $target_file = $target_dir . basename($_FILES["photo"]["name"]);
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        $photo_name = basename($_FILES["photo"]["name"]);
    } else {
        echo "There was an error uploading your file.";
        die();
    }
}

createAttraction($conn, $name, $type, $extra_information, intval($capacity), $status, $photo_name, $openes_on, $under_maintenance);