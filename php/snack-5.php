<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1 class="title">Snack 5</h1>
    <?php
    $text = "Il Signore degli Anelli (titolo originale in inglese: The Lord of the Rings) è un romanzo epico high fantasy scritto da J R R Tolkien e ambientato alla fine della Terza Era dell'immaginaria Terra di Mezzo. Scritto a più riprese tra il 1937 e il 1949, fu pubblicato in tre volumi tra il 1954 e il 1955 nonché tradotto in trentotto lingue ed ha venduto oltre 150 milioni di copie che lo rendono una delle opere letterarie di maggior successo del XX secolo. La narrazione comincia dove si era interrotto un precedente romanzo di Tolkien, Lo Hobbit, e l'autore usa lo stratagemma dello pseudobiblium per collegare le due storie: entrambi i romanzi sono, nella finzione della narrazione, una trascrizione di un volume immaginario, il Libro Rosso dei Confini Occidentali, un'autobiografia scritta a quattro mani da Bilbo Baggins, protagonista de Lo Hobbit, e dal nipote e cugino Frodo, il protagonista del Signore degli Anelli. Questo secondo romanzo, tuttavia, si inserisce in un'ambientazione di più ampio respiro rispetto a quella del primo, costretto dai limiti della fiaba per bambini, attingendo a quel vasto corpus storico, mitologico e linguistico creato ed elaborato dall'autore nel corso di tutta la sua vita. Il Signore degli Anelli narra della missione di nove Compagni, la Compagnia dell'Anello, partiti per distruggere il più potente Anello del Potere, un'arma che renderebbe invincibile il suo malvagio creatore Sauron se tornasse nelle sue mani, dandogli il potere di dominare tutta la Terra di Mezzo.";
    $paragrafi = explode('.', $text);
    for ( $i = 0; $i < count($paragrafi); $i++ ) {
        if ( $paragrafi[$i] == '' )
            break;
        ?>
        <h3>Paragrafo <?= $i + 1 ?></h3>
        <p><?= $paragrafi[$i] ?></p>
        <?php
    }    
    ?>
    <a href="../index.html">Home</a>
</body>
</html>