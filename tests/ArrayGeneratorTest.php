<?php

namespace App\Test;

use App\PhpCode\Generator\ArrayGenerator;
use PHPUnit\Framework\TestCase;

class StringGeneratorTest extends TestCase
{
    public function testAdd()
    {

        $arraylen = 6;
        $arrayGenerator = new ArrayGenerator();
        $result = $arrayGenerator->randomArrayGenerator(4, $arraylen);

        // checks if the returned length matches given length
        $length = count($result);
        $this->assertEquals($arraylen, $length);
        //checks if the return type is an array
        $type = gettype($result);
        $array = "array";
        $this->assertEquals($array, $type);

    }
}
