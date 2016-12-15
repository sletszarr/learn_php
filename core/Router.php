<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/10/16
 * Time: 7:06 PM
 */

class Router {

    protected $routes = [];

    public static function load($routes)
    {
        $router = new self;

        require $routes;

        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        } else {
            throw new Exception('routes not found');
        }
    }

}