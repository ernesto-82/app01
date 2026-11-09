<?php
class Calculadora 
    {
    protected $num1;
    protected $num2;
    public function __construct($num1, $num2) 
        {
        $this->num1 = $num1;
        $this->num2 = $num2;
        }

    public function sumar() 
        { 
        return $this->num1 + $this->num2;
        }
    public function restar() 
        { 
        return $this->num1 - $this->num2;
        }
    public function multiplicar()
        { 
        return $this->num1 * $this->num2;
        }
    public function dividir()
        {
        if ($this->num2 == 0) 
            {
            throw new Exception("No se puede dividir entre cero.");
            }
        return $this->num1 / $this->num2;
        }
    }

class CalculadoraCientifica extends Calculadora 
    {
    public function potencia() 
        { 
        return pow($this->num1, $this->num2); 
        }
    public function raiz() 
        {
        if ($this->num1 < 0) 
            {
            throw new Exception("No se puede calcular la raíz de un número negativo.");
            }
        return sqrt($this->num1);
        }
    }
?>