<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 12/29/16
 * Time: 10:00 PM
 */

namespace App\Contrrollers;

use App\Core\App;

class UsersController {

    public function index()
    {
        $tasks = App::get('database')->selectAll('todos');
        $users = App::get('database')->selectAll('users');

        return view('users', [
            'tasks' => $tasks,
            'users' => $users
        ]);
    }

    public function store()
    {
        App::get('database')->insert("users", [
            "name" => $_POST['name']
        ]);

        redirect("users");
    }
}