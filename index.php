<?php

require_once 'models/Pokemon.php';
require_once 'models/User.php';

$json = require ("test.json");
?>
<?php 
$base = "https://pokeapi.co/api/v2/pokemon/";
$power = 'https://pokeapi.co/api/v2/move/';
$id = 4;
// for($id = 1; $id<2; $id++) {
$data = file_get_contents($base.$id."/");
$test = file_get_contents($power.$id."/");
$damage = json_decode($test);
$pokemon = json_decode($data);

// pr
// print_r($pokemon->abilities);
// print_r($damage->power);

//recupère index
echo 'Index :'.$id.'<br>';
//recupère nom du pokemon
echo 'Nom :'.$pokemon->name.'<br>';
//recupère stat 0 (PV)
echo 'PV :'.$pokemon->stats[0]->base_stat.'<br>';
//recupère stat 1 (Attack)
echo 'Attaque :'.$pokemon->stats[1]->base_stat.'<br>';
//recupère stat 2 (Defense)
echo 'Défense :'.$pokemon->stats[2]->base_stat.'<br>';
//recupère stat 3 (Spe. Attack)
echo 'Attaque Spé :'.$pokemon->stats[3]->base_stat.'<br>';
//recupère stat 4 (Spe. Defense)
echo 'Défense Spé :'.$pokemon->stats[4]->base_stat.'<br>';
//recupère stat 5 (Speed)
echo 'Vitesse :'.$pokemon->stats[5]->base_stat.'<br>';
//recupère type(s) du pokemon
echo 'Type :'.$pokemon->types[0]->type->name.'<br>';

// Boucle sur les 200 premières attaques
for ($i = 1; $i < 200; $i++) {
    $moves = json_decode(file_get_contents($power.$i."/"));
    // Boucle sur les 152 premiers pokemons
    for ($j = 0; $j < 152; $j++) {
        if (isset($moves->learned_by_pokemon[$j])) {
            // Si le nom du pokémon ($pokemon->name) correspond à celui d'un des pokémons pouvant apprendre l'attaque sélectionnée, alors on indique que le pokémon sélectionné peut apprendre l'attaque
            if ($moves->learned_by_pokemon[$j]->name == $pokemon->name) {
                echo '<p style="color:red">'.$pokemon->name.' peut aprendre '.$moves->name.'</p>';
            }
        }
    }
}

// }
