<?php
        $age = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_INT);
        $firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
        $lastname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);            $message = "Hello, my name is";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Parameters Assignment</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
     
    <h1>
        <?php echo "Hello, my name is {$firstname} . {$lastname} !"; 
        ?>
    </h1>

    <h3>
        <?php 
            if ( $age >= 18 ) {
                $message = 'I am old enough to vote in the United States.';
            } else if ( $age <= 17 ) {
                $message = "I am not old enought to vote in the United States.";
            } else ( empty ($age)) {
                $message = 'Must enter your age!';
            }   ?>
    </h3>

    
    
</body>
</html>