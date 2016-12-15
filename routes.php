<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/10/16
 * Time: 6:20 PM
 */

$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php'
]);