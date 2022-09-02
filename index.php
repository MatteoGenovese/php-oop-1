<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    require_once __DIR__ . "/movie.php";

        $movies = [];
        $movies[] = new Movie('La vita è bella' , '90 min', 'drammatico');
        $movies[] = new Movie('Jumanji' , '120 min', 'boh');
    
    ?>

    <ul>
<?php 
    foreach ($movies as $key => $movie) {
?>
    <li> <?php echo "il " . ($key+1) . "° film è " . $movie->getTitle() . ", ha una durata di " . $movie->getDuration() . ", ed è di genere " . $movie->getGenre() . "."; ?>
    </li>
<?php }?>
    </ul>
</body>
</html>