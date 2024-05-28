<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php
session_start();

function setTitle($title)
{
    echo "<head> <title> $title </title> </head>";
}
?>