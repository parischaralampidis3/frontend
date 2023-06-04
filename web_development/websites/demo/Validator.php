<?php 

class Validator
{
    public function string($value,$min = 1, $max = INF)
    {
        return strlen(trim($value)) === 0;
    }
}