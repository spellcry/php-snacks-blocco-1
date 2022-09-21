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
    $partite = [
        [
            'casa' => [
                'nome' => 'Universo Treviso',
                'punteggio' => 99
            ],
            'ospite' => [
                'nome' => 'Reggiana',
                'punteggio' => 90
            ],
        ],
        [
            'casa' => [
                'nome' => 'Venezia',
                'punteggio' => 88
            ],
            'ospite' => [
                'nome' => 'Scafati',
                'punteggio' => 70
            ],
        ],
        [
            'casa' => [
                'nome' => 'Varese',
                'punteggio' => 77
            ],
            'ospite' => [
                'nome' => 'Dinamo Sassari',
                'punteggio' => 91
            ],
        ],
        [
            'casa' => [
                'nome' => 'Napoli',
                'punteggio' => 92
            ],
            'ospite' => [
                'nome' => 'Virtus Bologna',
                'punteggio' => 103
            ],
        ],
        [
            'casa' => [
                'nome' => 'Derthona',
                'punteggio' => 91
            ],
            'ospite' => [
                'nome' => 'Trento',
                'punteggio' => 77
            ],
        ],
        [
            'casa' => [
                'nome' => 'Olimpia Milano',
                'punteggio' => 101
            ],
            'ospite' => [
                'nome' => 'Brescia',
                'punteggio' => 90
            ],
        ],
        [
            'casa' => [
                'nome' => 'Trieste',
                'punteggio' => 71
            ],
            'ospite' => [
                'nome' => 'VL Pesaro',
                'punteggio' => 89
            ],
        ],
        [
            'casa' => [
                'nome' => 'Verona',
                'punteggio' => 87
            ],
            'ospite' => [
                'nome' => 'Brindisi',
                'punteggio' => 75
            ],
        ],
    ];
    ?>
    <ul class="risultati">
        <?php
        for ( $i = 0; $i < count($partite); $i++ ) {
            $partita = $partite[$i];
            ?>
            <li class="risultato">
                <?= "{$partita['casa']['nome']} - {$partita['ospite']['nome']} | {$partita['casa']['punteggio']} - {$partita['ospite']['punteggio']}" ?>
            </li>
            <?php
        }
        ?>
    </ul>
    <a href="../index.html">Home</a>
</body>
</html>