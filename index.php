<?php

require_once 'models/Pokemon.php';
require_once 'models/User.php';

$json = require ("test.json");
echo $json->name;
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
print_r($pokemon->name);
// pr
// print_r($pokemon->abilities);
// print_r($damage->power);


//recupère stat 0 (PV)
print_r($pokemon->stats[0]->base_stat);

print_r($pokemon->stats[1]->base_stat);

print_r($pokemon->stats[1]->base_stat);

print_r($pokemon->game_indices->id);

// }
