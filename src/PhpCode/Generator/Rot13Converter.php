<?php

namespace App\PhpCode\Generator;

use App\PhpCode\Interfaces\Rot13Interface;

class Rot13Converter implements Rot13Interface
{
    public function convert($string)
    {

        if (is_String($string) !== true) {
            $rot13String = str_rot13(implode(",", $string));
            $result = explode(",", $rot13String);
        } else {
            $result = str_rot13($string);
        }
        return $result;
    }
}
