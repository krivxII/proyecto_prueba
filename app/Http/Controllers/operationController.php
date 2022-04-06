<?php

namespace App\Http\Controllers;
use App\src\Calculator;
use Illuminate\Http\Request;

class operationController extends Controller
{
    
    public function operar ($operacion,$operando1,$operando2){
        switch ($operacion) {
            case "suma":
                return  response()->json([
                    'operacion' => $operacion,
                    'operando1' => $operando1,
                    'operando2' => $operando2,
                    'resultado' => Calculator::suma($operando1,$operando2)
                ]);   
                break;
            case "resta":
                    return  response()->json([
                    'operacion' => $operacion,
                    'operando1' => $operando1,
                    'operando2' => $operando2,
                    'resultado' => Calculator::resta($operando1,$operando2)
                ]);
                break;
            case "multiplicacion":
                response()->json([
                    'operacion' => $operacion,
                    'operando1' => $operando1,
                    'operando2' => $operando2,
                    'resultado' => Calculator::multiplicacion($operando1,$operando2)
                ]); 
                break;
             case "division":
                return  ($operando2==0) ?
                            "division por 0" 
                            :  
                            response()->json([
                                'operacion' => $operacion,
                                'operando1' => $operando1,
                                'operando2' => $operando2,
                                'resultado' => Calculator::division($operando1,$operando2)
                            ]);
                break;
            default:
               return "la operacion no existe";
        }
    }
   /*       
    public function suma ($operando1,$operando2){
    return Calculator::suma($operando1,$operando2);       
    }
    public function resta ($operando1,$operando2){
    return  Calculator::resta($operando1,$operando2);   
    }
    public function multiplicacion ($operando1,$operando2){
    return  Calculator::multiplicacion($operando1,$operando2);    
    }
    public function division ($operando1,$operando2){
    return  ($operando2==0) ? "division por 0" :  Calculator::division($operando1,$operando2);
    */
}
