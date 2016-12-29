<?php

/**
 * Created by PhpStorm.
 * User: DWP
 * Date: 12/15/16
 * Time: 5:19 PM
 */

namespace App\Core;

class Request
{
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}