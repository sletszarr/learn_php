<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/9/16
 * Time: 9:43 PM
 */


$tasks = $app['database']->selectAll('todos');

require 'views/index.view.php';
