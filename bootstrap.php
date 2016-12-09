<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/9/16
 * Time: 1:48 PM
 */

$config = require "config.php";
require 'database/Connection.php';
require 'database/QueryBuilder.php';

// get Query instance
return new QueryBuilder(Connection::make($config['database']));