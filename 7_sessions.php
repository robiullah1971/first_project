<?php
    $name = "Mithun Islam";
    $age = 25;

    $result = "";



    function checkAge($age){
        $result = "";
        if($age<18){
            $result = "Under Age";
        }elseif($age>18){
            $result = "Perfect Age";
        }

        return $result;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Project</title>
</head>
<body>

    <h1>My Name is <?php echo $name ?></h1>
    <h2>My Age is <?php echo $age?></h2>

    <p>Check My age: <?php echo checkAge($age) ?> </p>
</body>
</html>