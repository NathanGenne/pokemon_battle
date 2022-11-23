<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/styles.css">
<title>combat</title>
</head>
<body>
    <!-- Liste des pokémons sélectionnables -->
    <div class="container text-center" style="width: 90%;">
        <p class="fs-3">Tour <?= $_SESSION['turn'] ?></p>
        <div class="row row-cols-3">

            <?php
            $selected = 0;
            // Récupération
            $team1 = $_SESSION['team1'];
            $team2 = $_SESSION['team2'];
            
            ?>

            <div class="pokemon_1 col">
                <p class="row fs-3"><?= $team1[$selected]->getName(); ?></p>
                <img class="row <?= $team1[$selected]->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $team1[$selected]->getId() ?>.png">
                <p class='row'>Points de vie : <?= $team1[$selected]->getHealth(); ?></p>
                <p class='row'>Type : <?= $team1[$selected]->getType(); ?></p>
                <div class="moves row row-cols-2">
                    <?php foreach($team1[$selected]->moves as $move) : ?>
                    <div class="move">
                        <p><?= $move->name ?></p>
                        <p>Degats : <?= $move->power ?></p>
                        <p>Type : <?= $move->type ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        

            <div class="pokemon_2 col">
                <p class="row fs-3"><?= $team2[$selected]->getName(); ?></p>
                <img class="row <?= $team2[$selected]->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $team2[$selected]->getId() ?>.png">
                <p class='row'>Points de vie : <?= $team2[$selected]->getHealth(); ?></p>
                <p class='row'>Type : <?= $team2[$selected]->getType(); ?></p>
                <div class="moves row row-cols-2">
                <?php foreach($team2[$selected]->moves as $move) : ?>
                    <div class="move">
                        <p><?= $move->name ?></p>
                        <p>Degats : <?= $move->power ?></p>
                        <p>Type : <?= $move->type ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php $_SESSION['turn']++; ?>

    <div class="text-center">
        <button class="btn btn-warning">Attaques</button>
    </div>
</body>
</html>