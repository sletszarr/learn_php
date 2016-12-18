<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/9/16
 * Time: 1:48 PM
 */

App::bind('config', require 'config.php');

// get Query instance
App::bind('database',
    new QueryBuilder(Connection::make(
        App::get('config')['database'])
    )
);

