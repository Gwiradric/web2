<?php

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$age = $_POST["age"];

if (isset($name, $lastname, $age)) {
    echo "Name: $lastname, $name </br> Age: $age"; 
}