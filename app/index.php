<?php

use framework\App;
use framework\Database\Database;




$tasks = App::get('database') -> selectAll('tasks');
//$database = new Database(App::get('config')['database']);
//$tasks = $database -> selectAll('tasks');


$greeting = greet();