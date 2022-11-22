<?php

require_once 'models/Pokemon.php';
require_once 'models/User.php';
session_start();
$pokeListe = [1,3,5,7,2,4,6,8,10,9];
?>
<?php for($i=0; $i < count($pokeListe); $i++) : ?>
<a href="controller/pokemon_controller.php?id=<?= $pokeListe[$i] ?>">id: <?= $pokeListe[$i] ?></a>
<?php endfor; ?>
<?php
    if(isset($_SESSION["msg"]) && isset($_SESSION["msg2"])) {
        echo $_SESSION["msg"];
        echo $_SESSION["msg2"];
    }
?>