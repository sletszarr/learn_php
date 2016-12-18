<?php
/**
 * Created by PhpStorm.
 * User: DWP
 * Date: 12/18/16
 * Time: 11:58 AM
 */

class App {

    protected static $registry = [];

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        return static::$registry[$key];
    }

}
