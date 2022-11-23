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
            <div class="col">
                <img id="<?= $venusaur->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $venusaur->getId() ?>.png">
                <p><?= $venusaur->getName() ?></p>
            </div>
            <div class="col">
                <img id="<?= $charizard->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $charizard->getId() ?>.png">
                <p><?= $charizard->getName() ?></p>
            </div>
            <div class="col">
                <img id="<?= $blastoise->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $blastoise->getId() ?>.png">
                <p><?= $blastoise->getName() ?></p>
            </div>
            <div class="col">
                <img id="<?= $raikou->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $raikou->getId() ?>.png">
                <p><?= $raikou->getName() ?></p>
            </div>
            <div class="col">
                <img id="<?= $entei->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $entei->getId() ?>.png">
                <p><?= $entei->getName() ?></p>
            </div>
            <div class="col">
                <img id="<?= $suicune->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $suicune->getId() ?>.png">
                <p><?= $suicune->getName() ?></p>
            </div>
            <div class="col">
                <img id="<?= $gyarados->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $gyarados->getId() ?>.png">
                <p><?= $gyarados->getName() ?></p>
            </div>
            <div class="col">
                <img id="<?= $mewtwo->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $mewtwo->getId() ?>.png">
                <p><?= $mewtwo->getName() ?></p>
            </div>
            <div class="col">
                <img id="<?= $exploud->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $exploud->getId() ?>.png">
                <p><?= $exploud->getName() ?></p>
            </div>
            <div class="col">
                <img id="<?= $lucario->getId() ?>" src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $lucario->getId() ?>.png">
                <p><?= $lucario->getName() ?></p>
            </div>
        </div>
    </div>
</body>
</html>