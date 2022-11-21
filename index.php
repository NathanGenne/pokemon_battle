<?php

require_once 'models/Pokemon.php';
require_once 'models/User.php';

$json = require ("test.json");
echo $json->name;
?>