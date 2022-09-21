<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 class="title">Snack 7</h1>
    <?php
    $alunni = [
        [
            'nome' => 'Mario',
            'cognome' => 'Rinaldi',
            'voti' => [
                29,
                30,
                25
            ]
        ],
        [
            'nome' => 'Giacomo',
            'cognome' => 'Gigli',
            'voti' => [
                18,
                28,
                23
            ]
        ],
        [
            'nome' => 'Roberto',
            'cognome' => 'Sinagra',
            'voti' => [
                20,
                29,
                21
            ]
        ],
        [
            'nome' => 'Michela',
            'cognome' => 'Ruggeri',
            'voti' => [
                18,
                19,
                25
            ]
        ],
        [
            'nome' => 'Valentina',
            'cognome' => 'Zambelli',
            'voti' => [
                23,
                25,
                29
            ]
        ],
        [
            'nome' => 'Andrea',
            'cognome' => 'Gurrieri',
            'voti' => [
                24,
                26,
                28
            ]
        ],
    ]
    ?>
    <div class="alunni">
        <h3>Media dei voti per alunno</h3>
        <ul class="list">
            <?php
                for ( $i = 0; $i < count($alunni); $i++ ) {
                    ?>
                    <li class="list__item">
                        <?php
                        $alunno = $alunni[$i];
                        $tot = array_sum($alunno['voti']);
                        $media = number_format($tot / count($alunno['voti']), 2);
                        echo "{$alunno['nome']} {$alunno['cognome']}: {$media}";
                        ?>
                    </li>
                    <?php
                }
                ?>
        </ul>
    </div>
    <a href="../index.html">Home</a>
</body>
</html>