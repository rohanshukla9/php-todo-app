<?php

use App\Models\Task;


require 'vendor/autoload.php';


$task = new Task;
$task->setDescription("Buy potatoes");
$task->setDue(new DateTime('+ 2 days'));


var_dump($task);
