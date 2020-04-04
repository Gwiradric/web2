<?php

$a = $_GET["a"];
$b = $_GET["b"];
$c = $_GET["c"];

if (isset($a, $b, $c)) {
    $result = (($a * $b) - $c);

    echo "Result: $result";
}