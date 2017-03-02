<?php

include_once(__DIR__.'/../pages/modelo/usuario/Usuario.php');
class UsuarioTest1 extends PHPUnit_Framework_TestCase
{

   var $u = new Usuario();

    public function setUp()
    {
	$this->u->setId_usuario(12);

    }

    public function tearDown()
    {
        unset($this->u);
    }

    public function testUsuario()
    {
	
        $this->assertTrue(preg_match('/[^0-9]/',$this->u->getId_usuario() ));
    }




}

?>
