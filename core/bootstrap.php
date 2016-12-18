<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/9/16
 * Time: 1:48 PM
 */

$app = [];

$app['config'] = require "config.php";

// get Query instance
$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));
