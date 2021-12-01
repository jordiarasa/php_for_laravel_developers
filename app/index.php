<?php

use framework\App;
use framework\Database\Database;

require './app/helper.php';


$tasks = App::get('database') -> selectAll('tasks');
//$database = new Database(App::get('config')['database']);
//$tasks = $database -> selectAll('tasks');


$greeting = "Hola " . $_GET["nom"] . " " . $_GET["Cognom"] . "!";