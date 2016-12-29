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
        return view('index');
    }

    public function about()
    {
        $companyName = 'Aurasoft';
        return view('about',
            ['companyName' => $companyName,]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function aboutCulture()
    {
        return view('about-culture');
    }

}