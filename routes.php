<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/10/16
 * Time: 6:20 PM
 */

$router->get('', 'controllers/index.php');
$router->get('about', 'controllers/about.php');
$router->get('about/culture', 'controllers/about-culture.php');
$router->post('names', 'controllers/add-name.php');

