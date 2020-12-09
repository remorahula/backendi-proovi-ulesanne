<?php

namespace App\helper;

class Rot13ConverterString 
{   
    private $string;

    public function __construct (TransformerInterface $string) {
        $this->string = $string;
    }
    public function ROT13(int $stringlen) {

        $result = $this->string->generateRandomString($stringlen);

        return $result;
    }
}