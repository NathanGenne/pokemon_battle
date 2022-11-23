<?php
require_once 'function.php';
require_once 'models/Moves.php';
require_once 'models/Pokemon.php';
session_start();

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



