<?php

if (!function_exists(
    'getNormalSlug',
)){

    function getNormalSlug($slug){
    return $slug = str_replace(' ', '', ucwords($slug),);
    }
}

if (!function_exists('pregReplace')) {

    function pregReplace ($str,$start_count=5, $end_count=5) {
        return preg_replace('~(.{'.$start_count.'}).+(.{'.$end_count.'})~', '$1........$2', $str);
    }
}

