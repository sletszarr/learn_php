<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/12/16
 * Time: 12:43 PM
 *
 */

$database = require 'core/bootstrap.php';

$router = new Router();

require 'routes.php';

$uri = (trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));

require $router->direct($uri);
