<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/24/16
 * Time: 4:40 PM
 */

class Connection {

    public static function make($config)
    {
        try {

            return new PDO(
                $config['connection'].';dbname='.$config[name],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
}

