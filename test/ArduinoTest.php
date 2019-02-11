<?php
use PHPUnit\Framework\TestCase;
require "arduino.php";

final class ArduinoTest extends TestCase
{
	public function testVerificarParametros(){
		$ard=new Arduino();
		$this->assertEquals(true,$ard->verificarParametros(0,55,12)
		);
	}
	
	
	public function testValidarParametros(){
		$ard=new Arduino();
		$this->assertEquals(true,$ard->validarParametrosSms(32,55,12)
		);
	}
	
	
	public function testEnviarSms(){
		$ard=new Arduino();
		$this->assertEquals(true,$ard->enviarSms(45,32,12,3104706624)
		);
	}
	
}


?>