<?php

namespace App\Test;

use App\PhpCode\Generator\Rot13Converter;
use PHPUnit\Framework\TestCase;

class Rot13ConverterTest extends TestCase
{
    public function testAdd()
    {

        $string = "a";
        $rot13 = new Rot13Converter();
        $result = $rot13->convert($string);

        // checks if the convert method returns a ROT13
        $tested = str_rot13($string);
        $this->assertEquals($tested, $result);

    }
}
