<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 class="title">Snack 1</h1>
    <?php
    $numbers = [];
    while ( count($numbers) != 15 ) {
        $number = rand(0, 100);
        if ( !in_array($number, $numbers) )
            $numbers[] = $number;
    }
    ?>
    <p>
        <?= implode(', ', $numbers) ?>
    </p>
    <a href="../index.html">Home</a>
</body>
</html>