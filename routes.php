<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/10/16
 * Time: 6:20 PM
 */

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('about/culture', 'PagesController@aboutCulture');
$router->get('contact', 'PagesController@contact');
$router->post('names', 'FormController@addName');

