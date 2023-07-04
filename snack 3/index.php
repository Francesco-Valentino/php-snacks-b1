<?php 
    $numbers = [1, 2, 3, 4, 5];

    $letters = ["a", "b", "c", "d", "e"];

    function explodeAndMerge($array1, $array2){
        $exploded1 = [...$array1];

        $exploded2 = [...$array2];

        $merged = [];

        array_push($merged, $array1[0], $array2[0], $array1[1], $array2[1], $array1[2], $array2[2], $array1[3], $array2[3], $array1[4], $array2[4],);
    };
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 3</title>
    </head>

    <body>
        <h1>
            <?php
                var_dump(explodeAndMerge($numbers, $letters))  
            ?>
        </h1>
    </body>
</html>