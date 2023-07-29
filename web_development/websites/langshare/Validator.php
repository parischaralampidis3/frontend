<?php

class Validator
{
    public static function string($value,$min = 1 ,$max = INF)
    {
        $value = trim($value);
       // return strlen($value) === 0;
       return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function phone_number($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }




}