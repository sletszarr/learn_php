<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/9/16
 * Time: 9:43 PM
 */


$tasks = App::get('database')->selectAll('todos');
$users = App::get('database')->selectAll('users');

require 'views/index.view.php';
