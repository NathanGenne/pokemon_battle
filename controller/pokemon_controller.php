<?php 
$base = "https://pokeapi.co/api/v2/pokemon/";
$power = 'https://pokeapi.co/api/v2/move/';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $damage = json_decode(file_get_contents($power.$id."/"));
    $pokemon = json_decode(file_get_contents($base.$id."/"));

    $pokeListe = [1,3,5,7,2,4,6,8,10,9];

    //recupère index
    $msg = '<br>Index : '.$id.'<br>'.
    //recupère nom du pokemon
    'Nom : '.$pokemon->name.'<br>'.
    //recupère ses stats 0 (PV,Attack,Defense,Spe. Attack,Spe. Defense,Speed)
    'PV : '.$pokemon->stats[0]->base_stat.'<br>'.
    'Attaque : '.$pokemon->stats[1]->base_stat.'<br>'.
    'Défense : '.$pokemon->stats[2]->base_stat.'<br>'.
    'Attaque Spé : '.$pokemon->stats[3]->base_stat.'<br>'.
    'Défense Spé : '.$pokemon->stats[4]->base_stat.'<br>'.
    'Vitesse : '.$pokemon->stats[5]->base_stat.'<br>'.
    //recupère type(s) du pokemon
    'Type : '.$pokemon->types[0]->type->name.'<br>';

    // Initialise une table qui récupèrera 2 attaques que le pokémon peut apprendre
    $listId = [];
    // Génère un nombre aléatoire pour sélectionner une liste d'attaques aléatoires
    $max = rand(31,350);
    // Initialise un compteur qui s'arrêtera lorsque 2 attaques seront sélectionnées
    $counter = 0;
    // Boucle sur un interval de 30 attaques du jeu
    for ($i = $max-30; $i < $max; $i++) {
        $moves = json_decode(file_get_contents($power.$i."/"));
        // Boucle sur les x pokemons stockés dans la liste prédéfinie
        for ($j = 0; $j < count($pokeListe); $j++) {
            if (isset($moves->learned_by_pokemon[$pokeListe[$j]])) {
                // Si le nom du pokémon ($pokemon->name) correspond à celui d'un des pokémons pouvant apprendre l'attaque sélectionnée, alors on indique que le pokémon sélectionné peut apprendre l'attaque
                if ($moves->learned_by_pokemon[$pokeListe[$j]]->name == $pokemon->name) {
                    // Condition qui assure que le pokémon possèdera au moins une attaque offensive
                    if($moves->power != "") {
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
        $urlId = json_decode(file_get_contents($power.$id."/"));

        $msg2 = $msg2.'<br><br>Id : '.$urlId->id.'<br>'.
        'Nom : '.$urlId->name.'<br>'.
        'Dégats : '.$urlId->power.'<br>'.
        'Précision : '.$urlId->accuracy.'<br>'.
        'type : '.$urlId->type->name.'<br>';
    }

    $_SESSION["msg"] = $msg;
    $_SESSION["msg2"] = $msg2;
    header('Location: ../index.php');
}
else {
    header('Location: ../index.php');
}