<?php

namespace App\PhpCode\Generator;

class ArrayGenerator extends StringGenerator
{

    public function randomArrayGenerator(int $stringLenght, int $arraylen)
    {
        for ($x = 0; $x < $arraylen; $x++) {
            $randomArray[] = parent::generateRandomString($stringLenght);

        }
        return $randomArray;
    }
}
