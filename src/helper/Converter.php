<?php
namespace App\helper;
class Converter {

    public function convert($string){
        return str_rot13($string);
    }
}