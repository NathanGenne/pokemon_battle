<?php
require_once 'function.php';
require_once 'models/Moves.php';
require_once 'models/Pokemon.php';
session_start();

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

switch ($name) {
	case 3 :
		break;
	case 6 :
		break;
	case 9 :
		break;
	case 243 :
		break;
	case 244 :
		break;
	case 245 :
		break;
	case 130 :
		break;
	case 150 :
		break;
	case 295 :
		break;
	case 448 :
		break;
}

$team1 = getRandomTeam($listePokemons);
$team2 = getRandomTeam($listePokemons);

if(isset($_GET['action'])) {
	if ($_GET['action'] == 'selector') {
		require_once('vue/select_vue.php');
	}
	if ($_GET['action'] == 'combat') {
		require_once('vue/combat_vue.php');
	}
}
?>



