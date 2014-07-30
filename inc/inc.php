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

function post_id__to__text($id = "")
{
    if (!$id) {
        return false;
    }

    switch ($id) {

        case "vizitka" :
            return "Визитка";
            break;

        case "half" :
            return "односторонняя (4+0)";
            break;
        case "full" :
            return "двусторонняя (4+4)";
            break;

        case "ofs80" :
            return "80 г/м2 офсет";
            break;
        case "mel90" :
            return "90 г/м2 мел";
            break;
        case "mel115" :
            return "115 г/м2 мел";
            break;
        case "mel130" :
            return "130 г/м2 мел";
            break;
        case "mel150" :
            return "150 г/м2 мел";
            break;
        case "mel200" :
            return "200 г/м2 мел";
            break;
        case "mel250" :
            return "250 г/м2 мел";
            break;
        case "mel300" :
            return "300 г/м2 мел";
            break;
        case "mel350" :
            return "350 г/м2 мел";
            break;
        case "samokl" :
            return "Самоклейка";
            break;

        case "g1_0" :
            return "1+0 глянцевая УльтраБонд";
            break;
        case "g1_1" :
            return "1+1 глянцевая УльтраБонд";
            break;
        case "m1_0" :
            return "1+0 матовая УльтраБонд";
            break;
        case "m1_1" :
            return "1+1 матовая УльтраБонд";
            break;

        default:
            return false;
            break;
    }
}