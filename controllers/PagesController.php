<?php
/**
 * Created by PhpStorm.
 * User: DWP
 * Date: 12/18/16
 * Time: 1:57 PM
 */

class PagesController
{
    public function home()
    {

        $tasks = App::get('database')->selectAll('todos');
        $users = App::get('database')->selectAll('users');

        require 'views/index.view.php';
    }

    public function about()
    {
        require "views/about.view.php";
    }

    public function contact()
    {
        require "views/contact.view.php";
    }

    public function aboutCulture()
    {
        require "views/about-culture.view.php";
    }

}