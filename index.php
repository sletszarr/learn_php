<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/12/16
 * Time: 12:43 PM
 *
 */

use App\Core\{Router, Request};

require "vendor/autoload.php";

require 'core/bootstrap.php';

Router::load("routes.php")
    ->direct(Request::uri(), Request::method());

