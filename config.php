<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/9/16
 * Time: 2:34 PM
 */

return [
    'database' => [
        'name' => 'mytodo',
        'username' => 'root',
        'password' => 'janganliat2',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];