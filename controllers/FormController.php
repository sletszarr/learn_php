<?php
/**
 * Created by PhpStorm.
 * User: DWP
 * Date: 12/18/16
 * Time: 2:11 PM
 *
 */
class FormController
{
    public function addName()
    {
        App::get('database')->insert("users", [
            "name" => $_POST['name']
        ]);

        header('Location: /');
    }
}