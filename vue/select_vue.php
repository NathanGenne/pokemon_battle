<?php 
require_once 'function.php';

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
        <p class="fs-3">Pokémons disponibles</p>
        <div class="row row-cols-5">

            <?php foreach($listePokemons as $pokemon) : ?>

            <div class="pokemon_buton col">
                    <img class="<?= $$pokemon->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $$pokemon->getId() ?>.png">
                    <p class="name"><?= $$pokemon->getName() ?></p>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>

    <!-- Équipes des joueur et ordinateur -->
    <div class="container text-center" style="width: 90%;">
        <div class="row row-cols-3">

            <!-- équipe du joueur -->
            <div class="container text-center" style="width: 30%;">
                <p class="fs-3">Équipe du joueur</p>
                <div class="row row-cols-3">
                    <?php foreach($team1 as $pokemon) : ?>

                    <div class="pokemon_btn col">
                            <img class="<?= $$pokemon->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $$pokemon->getId() ?>.png">
                            <p class="name"><?= $$pokemon->getName() ?></p>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
            
            <!-- équipe de l'ordinateur -->
            <div class="container text-center" style="width: 30%;">
                <p class="fs-3">Équipe de l'ordi</p>
                <div class="row row-cols-3">
                    <?php foreach($team2 as $pokemon) : ?>

                    <div class="pokemon_btn col">
                            <img class="<?= $$pokemon->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $$pokemon->getId() ?>.png">
                            <p class="name"><?= $$pokemon->getName() ?></p>
                    </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>


    <div class="text-center">
        <button class="btn btn-warning" onclick="">Combattre !</button>
    </div>
</body>
</html>