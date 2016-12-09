<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/12/16
 * Time: 12:43 PM
 *
 */

$query = require 'core/bootstrap.php';

$tasks = $query->selectAll('todos');

require 'views/index.view.php';
