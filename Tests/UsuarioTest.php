<?php
include_once('../../../UsuarioCollector.php');
class UsuarioTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function setUp()
    {
        $this->pdo = new PDO($GLOBALS['db_dsn'], $GLOBALS['db_username'], $GLOBALS['db_password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->query("CREATE TABLE usuario (what VARCHAR(50) NOT NULL)");
    }

    public function tearDown()
    {
        $this->pdo->query("DROP TABLE usuario");
    }

    public function testUsuario()
    {
        $usuario = new Usuario($this->pdo);

        $this->assertEquals('Usuario', $usuario->usuario());
    }

    public function testUser()
    {
        $usuario = new Usuario($this->pdo);

        $this->assertEquals('User Bar', $helloWorld->user('Bar'));
    }

    public function testWhat()
    {
        $usuario = new Usuario($this->pdo);

        $this->assertFalse($usuario->clave());

        $usuario->user('Bar');

        $this->assertEquals('Bar', $usuario->clave());
    }
}

