<?php


function get_Pokemon_Data_by_ID($id) {

    $pokemon_base = "https://pokeapi.co/api/v2/pokemon/";
    
    $pokemon = json_decode(file_get_contents($pokemon_base.$id."/"));

    /* Récupère 2 attaques du pokémon récupéré */
    $moves = [];
    $i=0;
    while(count($moves)<2)
    {
        $move = json_decode(file_get_contents($pokemon->moves[$i]->move->url));
        if($move->power!=null) {
            $a = count($moves);
            $moves[$a]['name'] = $move->name;
            $moves[$a]['power'] = $move->power;
            $moves[$a]['accuracy'] = $move->accuracy;
            $moves[$a]['crit_rate'] = $move->meta->crit_rate;
            $moves[$a]['type'] = $move->type->name;
            $moves[$a]['damage_class'] = $move->damage_class->name;

        }
        $i++;
    }
    

    // Recupère les informations nécessaires à la construction d'un Pokémon
    $poke_stats = ["id" => $id, "name" => $pokemon->name, "PV" => $pokemon->stats[0]->base_stat+100, "attack" => $pokemon->stats[1]->base_stat, "defense" => $pokemon->stats[2]->base_stat, "attack_spe" => $pokemon->stats[3]->base_stat, "defense_spe" => $pokemon->stats[4]->base_stat, "speed" => $pokemon->stats[5]->base_stat, "type" => $pokemon->types[0]->type->name, "rage" => 0];
    
    // Récupère les attaques choisis pour le pokémon
    $poke_stats['moves'] = $moves;
    
    return $poke_stats;
}

function set_json_file($json_file) {

    $pokeListe = [3,6,9,243,244,245,130,150,295,448];
        $pokemonDataJson = [];
        for($i=0; $i < count($pokeListe); $i++) {
    
            $pokemon_data = get_Pokemon_Data_by_ID($pokeListe[$i]);
            $pokemonDataJson[] = json_encode($pokemon_data);
        }  
        $pokemonDataJson = json_encode($pokemonDataJson);
    
       file_put_contents($json_file, $pokemonDataJson);
        echo '<hr>File created<hr>';
    
}

function getRandomTeam(array $listePokemons) {
    shuffle($listePokemons);
    $team = [$listePokemons[0],$listePokemons[1],$listePokemons[2]];
    return $team;
}


/* function get_Random_Attack_by_ID($id) {
    $pokemon_base = "https://pokeapi.co/api/v2/pokemon/";
    $move_base = 'https://pokeapi.co/api/v2/move/';
    $pokemon = json_decode(file_get_contents($pokemon_base.$id."/"));
    $pokeListe = [1,3,5,7,2,4,6,8,10,9];

    // Initialise une table qui récupèrera 2 attaques que le pokémon peut apprendre
    $listId = [];
    // Génère un nombre aléatoire pour sélectionner une liste d'attaques aléatoires
    $max = rand(51,350);
    // Initialise un compteur qui s'arrêtera lorsque 2 attaques seront sélectionnées
    $counter = 0;
    $attack = [];
    // Boucle sur un interval de 50 attaques du jeu
    for ($i = $max-50; $i < $max; $i++) {
        $moves = json_decode(file_get_contents($move_base.$i."/"));
        // Boucle sur les x pokemons stockés dans la liste prédéfinie
        for ($j = 0; $j < count($pokeListe); $j++) {
            if (isset($moves->learned_by_pokemon[$pokeListe[$j]])) {
                // Si le nom du pokémon ($pokemon->name) correspond à celui d'un des pokémons pouvant apprendre l'attaque sélectionnée, alors on indique que le pokémon sélectionné peut apprendre l'attaque
                if ($moves->learned_by_pokemon[$pokeListe[$j]]->name == $pokemon->name) {
                    // Condition qui assure que le pokémon possèdera au moins une attaque offensive
                    echo "attack";
                    if($moves->power != "") {
                        echo " do_damage";
                        // Le compteur s'incrémente
                        $counter++;
                        // La liste d'id prend l'Id de l'attaque
                        array_push($listId,$moves->id);
                    }
                }
            }
        }
        // Si 2 attaques ont été choisi, alors on arrête la boucle
        if ($counter == 2) {
            break;
        }
    }

    // Récupère les données des attaques sélectionnées par leur id
    foreach($listId as $id) {
        $urlId = json_decode(file_get_contents($move_base.$id."/"));

        $msg2 = '<br><br>Id : '.$urlId->id.'<br>'.
        'Nom : '.$urlId->name.'<br>'.
        'Dégats : '.$urlId->power.'<br>'.
        'Précision : '.$urlId->accuracy.'<br>'.
        'type : '.$urlId->type->name.'<br>';

        array_push($attack,["id" => $urlId->id, "name" => $urlId->name, "power" => $urlId->power, "accuracy" => $urlId->accuracy, "type" => $urlId->type->name]);
    }

    return $attack;
} */
?>