<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <h1 class="title">Snack 3</h1>
    <?php
    $posts = [
        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];
    $date = array_keys($posts);
    for ( $i = 0; $i < count($date); $i++ ) {
        ?><h3><?php echo $date[$i] ?></h3><?php
        $datePosts = $posts[$date[$i]];
        ?>
        <ul>
            <?php
            for ($j = 0; $j < count($datePosts); $j++ ) {
                $post = $datePosts[$j];
                ?>
                <li>
                    <?= "Titolo: {$post['title']} Autore: {$post['author']} Testo: {$post['text']}" ?>
                </li>
                <?php
            }
            ?>
        </ul>
        <?php
    }
    ?>
    <br>
    <a href="../index.html">Home</a>
</body>
</html>