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
    <div class="container text-center" style="width: 60%;">
        <div class="row row-cols-5">

            <?php foreach($listePokemons as $pokemon) : ?>

            <div class="pokemon_buton col">
                    <img class="<?= $$pokemon->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $$pokemon->getId() ?>.png">
                    <p class="name"><?= $$pokemon->getName() ?></p>
            </div>
            <?php
            endforeach;
            ?>

            <?php foreach($team as $pokemon) : ?>

            <div class="pokemon_buton col">
                    <img class="<?= $$pokemon->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $$pokemon->getId() ?>.png">
                    <p class="name"><?= $$pokemon->getName() ?></p>
            </div>
            <?php
            endforeach;
            ?>

            <script>
                var butons = document.getElementsByClassName("pokemon_buton");
                for(butons of buton) {
                    buton.addEventListener("click", function() {
                        pokemon = buton.getElementsByClassName("name").innerHTML;
                        team.add(pokemon);
                    });
                }
                document.getElementsByClassName("pokemon_buton").innerHTML = butons;
            </script>
            
            <div class='12'>

            </div> 
        </div>
    </div>
</body>
</html>