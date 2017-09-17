<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include './scripts/say_hey.class.php'; ?>
</head>
<body>
    <?php
        $hey = new HeyThere;
        $hey->setup();
        $hey->setup('Amberlee');
        $hey->setup('Amber');
    ?>
</body>
</html>
