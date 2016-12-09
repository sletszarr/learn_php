<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/24/16
 * Time: 4:40 PM
 */

class Connection {

    public static function make()
    {
        try {
            return new PDO("mysql:host=127.0.0.1;dbname=mytodo", "root", "janganliat2");
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
}

