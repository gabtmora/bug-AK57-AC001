<?php

include_once(__DIR__.'/../pages/modelo/usuario/Usuario.php');
class UsuarioTest1 extends PHPUnit_Framework_TestCase
{

    private Usuario $user;

    public function setUp()
    {
	

        $this->user = new Usuario(); 	

	$this->user->setId_usuario(12);

    }

    public function tearDown()
    {
        unset($this->user);
    }

    public function testUsuario()
    {
	
        $this->assertTrue(preg_match('/[^0-9]/',$user->id_usuario));
    }




}

?>
