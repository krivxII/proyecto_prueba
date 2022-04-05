<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class operaciones extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'operar {operador1} {operador2} {operacion}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'operaciones aritmeticas basicas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $operador1 = $this->argument('operador1');
        $operador2 = $this->argument('operador2');
        $operacion = $this->argument('operacion');
        
        switch ($operacion) {
            case "suma":
                echo $operador1+$elemento2;  
                break;
            case "resta":
                echo $operador1-$operador2;  ;
                break;
            case "multiplicacion":
                echo $operador1*$operador2;
                break;
             case "division":
                echo ($operador2==0) ? "division por 0" : $operador1/$operador2;
                break;
            default:
               echo "la operacion no existe";
        }
        return 0;
    }
}
