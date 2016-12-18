<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/10/16
 * Time: 7:06 PM
 */

class Router {

    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($routes)
    {
        $router = new self;

        require $routes;

        return $router;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType)
    {
        if (array_key_exists($uri, $this->routes[$requestType])) {
            $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri])
            );
        } else {
            throw new Exception('routes not found');
        }
    }

    protected function callAction($controller, $action)
    {
        $ctl = new $controller();

        if (! method_exists($ctl, $action)) {
            throw new Exception($controller.' does\'t response to '.$action.' action');
        }

        return $ctl->$action();
    }

}