<?php

use framework\App;
use framework\Database\Database;




$tasks = App::get('database') -> selectAll('tasks');


$greeting = greet();

require '../resources/views/index.blade.php';