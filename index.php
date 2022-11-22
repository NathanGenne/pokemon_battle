<?php
require_once 'function.php';
require_once 'models/Moves.php';
require_once 'models/Pokemon.php';
require_once 'models/User.php';
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
    //print_r($pokemon);
    $$name = new Pokemon($pokemon);

}
print_r($listePokemons);
print_r($raikou->getId());

?>

<?php for($i=0; $i < count($pokeListe); $i++) : ?>
<a href="controller/pokemon_controller.php?id=<?= $i ?>">id: <?= $i ?></a>
<?php endfor; ?>

<?php
    /* print_r(get_Pokemon_Data_by_ID($pokeListe[0]));
    print_r(get_Random_Attack_by_ID($pokeListe[0])); */
    if(isset($_SESSION['ui'])) {
        echo $_SESSION['ui'];
    }
?>
<img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $pokeListe[0]?>.png" alt="" srcset="">
