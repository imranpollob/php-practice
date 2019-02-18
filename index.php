<?php

$queryBuilder = require "bootstrap.php";

$tasks = $queryBuilder->selectAll('tasks');

require "index.view.php";