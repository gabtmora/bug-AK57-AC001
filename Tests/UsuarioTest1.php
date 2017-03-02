<?php

include_once('../../../Usuario.php');
class UsuarioTest1 extends PHPUnit_Framework_TestCase
{

    private $user;

    public function setUp()
    {
	

        $this->user = new Usuario(); 	

	$this->user->setId_usuario(12);

    }

    public function tearDown()
    {
        $this->user->destroy()
    }

    public function testUsuario()
    {
	
        $this->assertTrue(preg_match('/[^0-9]/',$user->id_usuario);
    }




}

?>