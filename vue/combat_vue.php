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

            <div class="pokemon_button col">
                    <img id="<?= $$pokemon->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $$pokemon->getId() ?>.png">
                    <p class="name"><?= $$pokemon->getName() ?></p>
            </div>

            <script>
                var buttons = getElementsByClassName("pokemon_button");
                for(buttons of button) {
                    button.addEventListener("click", addToTeam);
                }
                
                function addToTeam() {
                    button.addClass("d-none");
                }
            </script>

            <?php
            endforeach;
            ?>

            <script>
                var button = getElementsByClassName("pokemon_button");
                button.addEventListener("click", addToTeam);

                function addToTeam() {
                    button.addClass("bg-dark");
                }
            </script>

        </div>
    </div>
</body>
</html>