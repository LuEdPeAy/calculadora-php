<?php

require_once('utilidades.php');

Use Utilidades\VerificarNumeroPositivo;

class Operaciones{

    use VerificarNumeroPositivo;

    private $num1;
    private $num2;
    private $operador;

    public function __construct($num1 = 0, $num2 = 0, $operador = '+'){
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->operador = $operador;
    }

    public function operaciones(){

        switch($this->operador){
            case '/':
                $resultado = $this->division($this->num1, $this->num2);
                return $resultado;
                break;
            case '*':
                $resultado = $this->multiplicacion($this->num1, $this->num2);
                return $resultado;
                break;
            case '-':
                $resultado = $this->resta($this->num1, $this->num2);
                return $resultado;
                break;
            case '+':
                $resultado = $this->suma($this->num1, $this->num2);
                return $resultado;
                break;            
        }
    }

    public function suma($num1, $num2){
        $resultado = $num1 + $num2;

        return $array = [
            'operacion' => $this->num1 . $this->operador .  $this->num2,
            'resultado' => $resultado
        ];
    }

    public function resta($num1, $num2){
        $resultado = $num1 - $num2;

        return $array = [
            'operacion' => $this->num1 . $this->operador .  $this->num2,
            'resultado' => $resultado
        ];
    }

    public function multiplicacion($num1, $num2){
        $resultado = $num1 * $num2;

        return $array = [
            'operacion' => $this->num1 . $this->operador .  $this->num2,
            'resultado' => $resultado
        ];
    }

    public function division($num1, $num2){
            if ($this->esMayorQueCero($num2)) {
                $resultado = $num1 / $num2;

                $array = [
                    'operacion' => $this->num1 . $this->operador .  $this->num2,
                    'resultado' => $resultado
                ];
            }

            if(!$this->esMayorQueCero($num2)){
                $array = [
                    'operacion' => $this->num1 . $this->operador .  $this->num2,
                    'resultado' => 'Error: Segundo número negativo'
                ];
            }
            
            if($this->esCero($num2)){
                $array = [
                    'operacion' => $this->num1 . $this->operador .  $this->num2,
                    'resultado' => 'Error: División entre cero'
                ];
            }
        
        return $array;
    }
    
}

?>