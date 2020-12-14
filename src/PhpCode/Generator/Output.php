<?php

namespace App\PhpCode\Generator;

use App\PhpCode\Interfaces\TransformerInterface;

class Output extends Rot13Converter
{

    private $array;

    public function __construct(TransformerInterface $array)
    {
        $this->array = $array;
    }

    public function random($stringlen)
    {

        $result = parent::convert($this->array->generateRandomString($stringlen));
        return $result;
    }

    public function randomArray($stringlen, $arraylen)
    {

        $result = parent::convert($this->array->randomArrayGenerator($stringlen, $arraylen));

        return $result;
    }
}
