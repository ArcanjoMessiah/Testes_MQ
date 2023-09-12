<?php
// CalculadoraTest.php

require 'Calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    public function testSoma()
    {
        // Arrange
        $calculadora = new Calculadora();
        $a = 5;
        $b = 3;

        // Act
        $resultado = $calculadora->somar($a, $b);

        // Assert
        $this->assertEquals(8, $resultado);
    }

    public function testSubtracao()
    {
        // Arrange
        $calculadora = new Calculadora();
        $a = 8;
        $b = 3;

        // Act
        $resultado = $calculadora->subtrair($a, $b);

        // Assert
        $this->assertEquals(5, $resultado);
    }

    public function testMultiplicacao()
    {
        // Arrange
        $calculadora = new Calculadora();
        $a = 4;
        $b = 7;

        // Act
        $resultado = $calculadora->multiplicar($a, $b);

        // Assert
        $this->assertEquals(28, $resultado);
    }

    public function testDivisao()
    {
        // Arrange
        $calculadora = new Calculadora();
        $a = 15;
        $b = 3;

        // Act
        $resultado = $calculadora->dividir($a, $b);

        // Assert
        $this->assertEquals(5, $resultado);
    }

    public function testDivisaoPorZero()
    {
        // Arrange
        $calculadora = new Calculadora();
        $a = 10;
        $b = 0;

        // Act and Assert
        $this->expectException(InvalidArgumentException::class);
        $calculadora->dividir($a, $b);
    }
}
?>
