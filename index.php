<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/12/16
 * Time: 12:43 PM
 *
 */

$query = require 'bootstrap.php';

require 'Task.php';

$tasks = $query->selectAll('todos');

require 'index.view.php';
