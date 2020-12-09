<?php

namespace App\helper;

class StringGenerator extends Converter implements TransformerInterface {

    function generateRandomString(int $length) {
        $stringArray[]= array();
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString='';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $ConvertedString = parent::convert($randomString);
        return $ConvertedString;
    }
}