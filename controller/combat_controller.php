<?php 
require_once '../function.php';
require_once '../models/Moves.php';
require_once '../models/Pokemon.php';
session_start();

if (isset($_SESSION['team1']) && isset($_SESSION['team2'])) {

    $team1 = $_SESSION['team1'];
    $team2 = $_SESSION['team2'];

    print_r($team1[0]->getName());
    print_r($team1[0]->getHealth());
    echo ' VS ';
    print_r($team2[0]->getName());
    print_r($team1[0]->getHealth());
}
else {
    header('Location: ../index.php?action=selector');
}