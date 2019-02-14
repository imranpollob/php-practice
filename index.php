<?php

$queryBuilder = require "bootstrap.php";
require "Task.php";

$tasks = [
    new Task('Wake Up Early'),
    new Task('Say My Prayer'),
    new Task('Go For A Walk'),
];

$tasks[0]->makeComplete();

$dbTasks = $queryBuilder->selectAll('tasks');

require "index.view.php";