<?php

include_once 'autoload.php';

use assets\js\Test;

$test = new Test();

$users = $test->getUsers();


echo '<pre>';
print_r($users);