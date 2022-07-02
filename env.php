<?php

session_start();

$GLOBALS['config'] = array(
    'author' => array(
        'apps' => 'eventsflip',
        'developer' => 'Mohammad Ali Abdullah, Bangladesh',
        'apps' => 'Events Flip',
    ),
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'eventsflip'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'sessions' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
);

?>