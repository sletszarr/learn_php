<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/9/16
 * Time: 1:48 PM
 */

$app = [];

$app['config'] = require "config.php";

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';

// get Query instance
$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
