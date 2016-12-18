<?php
/**
 * Created by PhpStorm.
 * User: DWP
 * Date: 12/16/16
 * Time: 11:13 AM
 *
 */

App::get('database')->insert("users", [
    "name" => $_POST['name']
]);

header('Location: /');

