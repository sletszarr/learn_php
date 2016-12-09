<?php
/**
 * Created by PhpStorm.
 * User: bnamora
 * Date: 11/12/16
 * Time: 3:06 PM
 * @param $data
 */

function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function isAllowed($age)
{
    if ($age > 17) {
        return true;
    } else {
        return false;
    }
}


