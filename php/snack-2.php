<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 class="title">Snack 2</h1>
    <div>
        <?php
        if ( count($_GET) == 3 ) {
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];
            $nameCorrect = false;
            $mailCorrect = false;
            $ageCorrect = false;
            if ( strlen($name) > 3 )
                $nameCorrect = true;
            $letters = str_split($mail);
            $lettersCount = array_count_values($letters);
            if ( key_exists('.', $lettersCount) && key_exists('@', $lettersCount) ) {
                if ( $lettersCount['.'] >= 1 && $lettersCount['@'] == 1 )
                    $mailCorrect = true;                  
            }
            if ( is_numeric($age) )
                $ageCorrect = true;
            echo $nameCorrect && $mailCorrect && $ageCorrect ? "Accesso riuscito" : "Accesso negato";
        } else {
            ?><h3>Passare i parametri GET: name, mail e age</h3><?php
        }
        ?>
    </div>
    <br>
    <a href="../index.html">Home</a>
</body>
</html>