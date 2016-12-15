<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/12/16
 * Time: 12:43 PM
 *
 */

$database = require 'core/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require Router::load("routes.php")
    ->direct($uri);

