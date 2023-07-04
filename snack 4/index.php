<?php
    $array = [1, 2, 3, 4, 5];

    function createRange($total, $minNum, $maxNum){
        $newArray = [];

        return array_push($newArray, range($total[($minNum + 1)], $total[($maxNum + 1)]));
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 4</title>
    </head>

    <body>
        <h1>
            <?php
                createRange($array, 2, 5)
            ?>
        </h1>
    </body>
</html>