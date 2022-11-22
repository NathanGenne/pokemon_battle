<?php
require_once 'function.php';
require_once 'models/Pokemon.php';
require_once 'models/User.php';
session_start();

$pokeListe = [3,3,5,7,2,4,6,8,10,9];
?>
<?php for($i=0; $i < count($pokeListe); $i++) : ?>
<a href="controller/pokemon_controller.php?id=<?= $pokeListe[$i] ?>">id: <?= $pokeListe[$i] ?></a>
<?php endfor; ?>
<?php
    print_r(get_Pokemon_Data_by_ID($pokeListe[0]));
    print_r(get_Random_Attack_by_ID($pokeListe[0]));
    
?>
<img src="https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/<?= $pokeListe[0]?>.png" alt="" srcset="">