<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/12/16
 * Time: 12:43 PM
 *
 */

require 'core/bootstrap.php';

require Router::load("routes.php")
    ->direct(Request::uri(), Request::method());

