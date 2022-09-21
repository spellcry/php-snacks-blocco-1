<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 class="title">Snack 6</h1>
    <div class="content">
        <?php
        $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];
        $dbKeys = array_keys($db);
        for ( $i = 0; $i < count($dbKeys); $i++ ) {
            $category = $dbKeys[$i];
            ?>
            <div class="<?= $category ?>">
                <?php
                $persons = $db[$category];
                ?>
                <ul>
                    <?php
                    for ($j = 0; $j < count($persons); $j++ ) {
                        $person = $persons[$j];
                        ?>
                        <li>
                            <?php
                            echo "{$person['name']} {$person['lastname']}";
                            ?>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <?php
        }
        ?>
    </div>
    <br>
    <a href="../index.html">Home</a>
</body>
</html>