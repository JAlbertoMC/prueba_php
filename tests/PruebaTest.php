<?php

use PHPUnit\Framework\TestCase;

use App\Suma;
 
class PruebaTest extends TestCase
{

    /** @test */
    public function uno_mas_uno()
    {
        // Setup
        $suma = new Suma;

        // Accion
        $suma->sumar(1,1);

        // Comprobaciones / Aserciones
        $this->assertEquals(2, $suma->resultado());
    }

    /** @test */
    public function diez_mas_15()
    {
        $suma = new Suma;
        $suma->sumar(10,15);
        $this->assertEquals(45, $suma->resultado());
    }

}