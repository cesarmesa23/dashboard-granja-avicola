<?php
use PHPUnit\Framework\TestCase;
require "Calculadora.php";

final class CalculadoraTest extends TestCase
{
	public function testSuma(){
		$cal=new Calculadora();
		$this->assertEquals(7,
		$cal->suma(3,4)
		
		);
}
}


?>