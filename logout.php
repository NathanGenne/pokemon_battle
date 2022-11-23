<?php
   session_start();
   unset($_SESSION['team2']);
   unset($_SESSION['team1']);
   
   echo 'Vous êtes déconnecté';
   header('Refresh: 0.5; URL = index.php?action=selector');
?>