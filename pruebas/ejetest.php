<?php
require_once('RemoteConnect.php');
class RemoteConnectTest extends PHPUnit_Framework_TestCase
{
  public function setUp(){ }
  public function tearDown(){ }
  public function testConnectionIsValid()
  {
    // prueba para asegurarse de que el objeto de un fsockopen es válido 
    $connObj = new RemoteConnect();
    $serverName = 'www.google.com';
    $this->assertTrue($connObj->connectToServer($serverName) !== false);
  }
}
?>