<?php 
require_once 'function.php';
require_once 'models/Moves.php';
require_once 'models/Pokemon.php';

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets\styles.css">
<title>combat</title>
</head>
<body>
    <!-- Liste des pokémons sélectionnables -->
    <div class="container text-center" style="width: 60%;">
        <p class="fs-3">Combat</p>
        <div class="row row-cols-3">

            <?php
            $team1 = $_SESSION['team1'];
            $team2 = $_SESSION['team2'];
            
            ?>

            <div class="pokemon_1 col">
                <h4 class='row'><?= $team1[0]->getName(); ?></h4>
                <img class="row <?= $team1[0]->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $team1[0]->getId() ?>.png">
                <p class='row'>Points de vie : <?= $team1[0]->getHealth(); ?></p>
                <p class='row'>Type : <?= $team1[0]->getType(); ?></p>
            </div>

            <div class="pokemon_2 col">
                <h4 class='row'><?= $team2[0]->getName(); ?></h4>
                <img class="row <?= $team2[0]->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $team2[0]->getId() ?>.png">
                <p class='row'>Points de vie : <?= $team2[0]->getHealth(); ?></p>
                <p class='row'>Type : <?= $team2[0]->getType(); ?></p>
            </div>

            
        </div>
    </div>
        

    <div class="text-center">
        <button class="btn btn-warning">Attaques</button>
    </div>
</body>
</html>