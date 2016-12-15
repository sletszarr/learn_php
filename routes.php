<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/10/16
 * Time: 6:20 PM
 */

$router->define([
    'learn' => 'controllers/index.php',
    'learn/about' => 'controllers/about.php',
    'learn/about/culture' => 'controllers/about-culture.php',
    'learn/contact' => 'controllers/contact.php'
]);