<?php

require_once 'env.php';

// public controller/ all file in the view page and config.
function controllerLoad($controller)
{
    $baseDirectory = __DIR__ . '/controller/';
    $file = $baseDirectory . $controller . '.php';
    
    if(file_exists($file)) {
      require $file;
    }
}
// public config/ all file in the view page and controller.
function configLoad($config)
{
    $baseDirectory = __DIR__ . '/config/';
    $file = $baseDirectory . $config . '.php';
    
    if(file_exists($file)) {
      require $file;
    }
}

spl_autoload_register('controllerLoad');
spl_autoload_register('configLoad');

function escape($string) {
  return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

if(Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('sessions/session_name'))) {
  $hash = Cookie::get(Config::get('remember/cookie_name'));
  $hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

  if($hashCheck->count()) {
      $user = new User($hashCheck->first()->user_id);
      $user->login();
  }
}