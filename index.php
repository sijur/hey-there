<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hey There!</title>
    <?php include './scripts/say_hey.class.php'; ?>
    <?php //include './scripts/say_hey_child.class.php'; ?>
</head>
<body>

    <?php
        $hey = new HeyThere;
        $hey->sayHey('Amberlee');
        $hey->sayBye('Amber');
        $hey->sayHey('Jostur Highland (the writer)');
    ?>
</body>
</html>
