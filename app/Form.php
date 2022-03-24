<?php

namespace App;

class Form
{
    private $datas = [];

    public function __construct($datas = []){
        $this->datas = $datas;
    }

    public function input($name, $type, $placeholder){
        $value = "";
        if(isset($data[$name])){
            $value = $this->datas[0];
        }
        return "<input name=\"$name\" type=\"$type\" placeholder=\"$placeholder\" value=\"$value\">";
    }

    public function textArea($name, $type, $placeholder){
        return "<textarea type=\"$type\" name=\"$name\" placeholder=\"$placeholder\"></textarea>";
    }

    public function submit($type, $value, $class){
        return "<input type=\"$type\" value=\"$value\" class=\"$class\">";
    }
}