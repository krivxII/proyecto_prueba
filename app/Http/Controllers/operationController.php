<?php

namespace App\Http\Controllers;
use App\src\Calculator;
use Illuminate\Http\Request;

class operationController extends Controller
{
    public function suma ($elemento1,$elemento2){
    return Calculator::suma($elemento1,$elemento2);       
    }
    public function resta ($elemento1,$elemento2){
    return  Calculator::resta($elemento1,$elemento2);   
    }
    public function multiplicacion ($elemento1,$elemento2){
    return  Calculator::multiplicacion($elemento1,$elemento2);    
    }
    public function division ($elemento1,$elemento2){
    return  ($elemento2==0) ? "division por 0" :  Calculator::division($elemento1,$elemento2);
    }
}
