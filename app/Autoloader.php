<?php

namespace App;

class Autoloader
{
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoLoad'));
    }

    static function autoLoad($class_name){
        require $class_name.'.php';
    }
}