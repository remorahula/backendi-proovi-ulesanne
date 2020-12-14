<?php

namespace App\Test;

use App\PhpCode\Generator\StringGenerator;
use PHPUnit\Framework\TestCase;

class StringGeneratorTest extends TestCase
{
    public function testAdd()
    {
        $len = 4;
        $stringGenerator = new StringGenerator();
        $result = $stringGenerator->generateRandomString($len);

        // checks if the returned length matches given length
        $length = strlen($result);
        $this->assertEquals($len, $length);
        //checks if the return type is a string
        $type = gettype($result);
        $string = "string";
        $this->assertEquals($string, $type);

    }
}
