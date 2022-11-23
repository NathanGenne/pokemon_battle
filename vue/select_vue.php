<?php 
    $json_file = 'assets/data/pokemons.json';
    /* Si le fichier pokemons.json n'existe pas ou est vide, alors on le rempli avec la liste de pokemons entrés en paramètre */
    if ((!file_exists($json_file)) || (file_exists($json_file) && filesize ($json_file) == 0)) {
        set_json_file($json_file);
    }
    $pokeListe = json_decode(file_get_contents($json_file));


    /* Instancie les objets pokémons et leurs attaques */
    foreach($pokeListe as $pokemon)
    {
        $pokemon = json_decode($pokemon);
        $name = $listePokemons[] = $pokemon->name;
        $$name = new Pokemon($pokemon);
    }

    /* Génération des 2 équipes */
    $team1 = getRandomTeam($listePokemons);
    $team1Members = $team2Members = [];
    foreach($team1 as $member){
        $team1Members[] = $$member;
    }
    $_SESSION['team1'] = $team1Members;

    $team2 = getRandomTeam($listePokemons);
    foreach($team2 as $member){
        $team2Members[] = $$member;
    }
    $_SESSION['team2'] = $team2Members;

    $_SESSION['turn'] = 1;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./node_modules/nes.css/css/nes.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets\css\styles.css">
<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/minecraftia" type="text/css"/>

<title>combat</title>
</head>
<body>
    <!-- Liste des pokémons sélectionnables -->
    <div class="container text-center" style="width: 60%;">
        <p class="fs-3">Pokémons Disponibles</p>
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
        <button class="btn btn-primary"><a href="index.php?action=selector">Random</a></button>
        <button class="btn btn-primary"><a href="index.php?action=combat">Combattre !</a></button>
    </div>

    
</body>
</html>