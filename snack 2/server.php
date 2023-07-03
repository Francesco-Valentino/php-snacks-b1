<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 2 access</title>
    </head>

    <body>
        <?php
            $name = $_GET("inputName");

            $email = $_GET("inputEmail");
            
            $age = $_GET("inputAge");

            if(strlen($name) < 3 && str_contains($email, "@", ".") && str_contains($age, "0", "1", "2", "3", "4", "5", "6", "7", "8", "9")){
                echo "<p> Access complete </p>";
            } else{
                echo "<p> Access denied </p>"; 
            };

        ?>
    </body>
</html>