<?php

namespace App\helper;

interface TransformerInterface
{
    public function generateRandomString(int $value);
}