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

print_r($listePokemons);
echo '<br>';
print_r($charizard->getMove_Name(0));
print_r($charizard->attack_power(0, 3));
echo '<br>';
echo 'Vie du Dracofeu : '.$charizard->getHealth();
$charizard->attacked($raikou->attack_power(0,$charizard->getId()), $raikou->getMove_Damage_class(0), $raikou->getId());
echo $raikou->getName().' attaque '.$charizard->getName().' avec '.$raikou->getMove_Name(0).' infligeant '.$charizard->getDamageSuffered().' points de dégats';
echo 'Vie du Dracofeu : '.$charizard->getHealth().'<br>';


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

/* Appel des vues selon la valeur d'action inscrite dans l'url */
if(isset($_GET['action'])) {
	if ($_GET['action'] == 'selector') {
		require_once('vue/select_vue.php');
	}
	if ($_GET['action'] == 'combat') {
		require_once('vue/combat_vue.php');
	}
}
?>



