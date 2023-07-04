<?php 
    $numbers = [1, 2, 3, 4, 5];

    $letters = ["a", "b", "c", "d", "e"];

    function explodeAndMerge($array1, $array2){
        return $mergedArray = [...$array1, ...$array2];
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