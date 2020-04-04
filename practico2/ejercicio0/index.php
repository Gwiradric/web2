<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 0</title>
</head>

<body>
    <?php

    function getObjects() {

        $objects = [
            "flower" => ["images" => ["flower_0.jpg", "flower_1.jpg", "flower_2.jpg", "flower_3.jpg", "flower_4.jpg"], "name" => "Flores"],
            "tree" => ["images" => ["tree_0.jpg", "tree_1.jpg", "tree_2.jpg", "tree_3.jpg", "tree_4.jpg"], "name" => "Arboles"],
            "duck" => ["images" => ["duck_0.jpg", "duck_1.jpg", "duck_2.jpg", "duck_3.jpg", "duck_4.jpg"], "name" => "Patos"]
        ];

        return $objects;
    }

    function home()
    {
        $objects = getObjects();

        echo "<p>Seleccione un objecto:</p><br>";
        foreach ($objects as $object => $data)
            echo "<a href='photos/$object'>" . $data["name"] . "</a><br>";
    }

    function photos($object)
    {
        $objects = getObjects();

        if (isset($object) && isset($objects[$object])) {
            $selected_object = $objects[$object];
            echo "<h1>" . $selected_object["name"] . "</h1>";
            foreach ($selected_object["images"] as $image)
                echo "<img src='../img/$image'/><br>";
        }
    }
        


    ?>
</body>

</html>