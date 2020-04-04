<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php

    $tam = $_GET["tam"];

    if (isset($tam)) {

        echo "<table>";

        for ($i = 0; $i < $tam; $i++) {

            echo "<tr>";

            for ($j = 0; $j < $tam; $j++) {
                if (($i == 0) && ($j != 0)) {
                    echo '<td class="celda">' . $j . '</td>';
                } elseif (($i == 0) && ($j == 0)) {
                    echo '<td></td>';
                } elseif (($j == 0) && ($i != 0)) {
                    echo '<td class="celda">' . $i . '</td>';
                } elseif (($j == $i)) {
                    echo '<td class="celda">' . $j * $i . '</td>';
                } else {
                    echo "<td>" . $j * $i . "</td>";
                }
            }

            echo "</tr>";
        }

        echo "</table>";
    }

    ?>
</body>

</html>