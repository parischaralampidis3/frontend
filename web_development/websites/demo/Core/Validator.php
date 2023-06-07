<?php 

namespace Core;

class Validator
{
    public static function string($value,$min = 1, $max = INF)

    {
        $value = trim($value);

        return strlen(trim($value)) >=  $min && strlen($value) <= $max;

    }
}