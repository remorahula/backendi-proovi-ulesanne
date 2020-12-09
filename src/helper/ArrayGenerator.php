<?php

namespace App\helper;

use App\helper\RandomStringGenerator;

class ArrayGenerator extends StringGenerator
{   

    public function generateRandomString(int $stringLenght) {
            for($x = 0; $x < $stringLenght; $x++) {
                $randomArray[] = parent::generateRandomString($stringLenght);

        }
        return $randomArray;
    }
}