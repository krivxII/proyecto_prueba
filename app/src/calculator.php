<?php

namespace App\src;

class Calculator
{
    static function suma($operador1,$operador2){
        return $operador1+$operador2;
    }
    static function resta($operador1,$operador2){
        return $operador1-$operador2;
    }
    static function multiplicacion($operador1,$operador2){
        return $operador1*$operador2;
    }
    static function division($operador1,$operador2){
        return $operador1/$operador2;
    }
}

