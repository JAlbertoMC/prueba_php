<?php

namespace App;

class Suma
{
    private $suma;
    public function sumar($numero1, $numero2)
    {
        $this->suma = $numero1 + $numero2;
    }
    
    public function resultado()
    {
            return $this->suma;
    }

}
