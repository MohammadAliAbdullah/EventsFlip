<?php

require_once '../functions.php';
$user = new User();
$user->logout();
Redirect::to('index.php');