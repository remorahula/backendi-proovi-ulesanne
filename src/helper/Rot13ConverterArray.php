<?php

namespace App\helper;

class Rot13ConverterArray
{   
    private $array;

    public function __construct (TransformerInterface $array) {
        $this->array = $array;
    }
    public function ROT13(int $stringlen) {

        $result = $this->array->generateRandomString($stringlen);

        return $result;
    }
}