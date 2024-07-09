<?php

require "../bootstrap.php";

use core\Controller;

dd(\app\classes\Uri::uri());

try {


  $controller = new Controller;
  $controller = $controller->load();

  dd($controller);
} catch (Exception $e) {
  dd($controller);
}
