<?php

namespace App\PhpCode\Generator;

use App\PhpCode\Interfaces\TransformerInterface;

class StringGenerator implements TransformerInterface
{

    public function generateRandomString(int $length)
    {
        $stringArray[] = array();
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        };
        $test = "a";
        return $randomString;
    }
}
