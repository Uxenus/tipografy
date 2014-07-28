<?php
/**
 * Created by PhpStorm.
 * User: uxenus
 * Date: 09.07.14
 * Time: 13:48
 */

if (!function_exists("vd_request")) {
    function vd_request()
    {
        var_dump(@$_REQUEST);
    }
}

if (!function_exists("vd_post")) {
    function vd_post()
    {
        var_dump(@$_POST);
    }
}

if (!function_exists("vd_get")) {
    function vd_get()
    {
        var_dump(@$_GET);
    }
}