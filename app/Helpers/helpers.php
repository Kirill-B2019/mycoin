<?php

if (!function_exists(
    'getNormalSlug'

)){

    function getNormalSlug($slug){
    return $slug = str_replace(' ', '', ucwords($slug),);
    }


}
