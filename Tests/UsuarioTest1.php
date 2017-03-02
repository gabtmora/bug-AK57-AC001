<?php

include_once(__DIR__.'/../pages/modelo/usuario/Usuario.php');
class UsuarioTest1 extends PHPUnit_Framework_TestCase
{

   var $u ;

    public function setUp()
    {
	    $this->u = new Usuario();

	    $this->u->setId_usuario(12);
	    $this->u->setRol('A');

    }

    public function tearDown()
    {
        unset($this->u);
    }

    public function testUsuario()
    {
	$this->assertEquals(0,preg_match('/[^0-9]/',$this->u->getId_usuario() ));
    }

    public function testRol()
    {
	$this->assertEquals('A',$this->u->getRol() );
    }


}

?>
