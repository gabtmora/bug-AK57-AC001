<?php

class Usuario extends PHPUnit_Framework_TestCase
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function user($usuario = 'nombre')
    {
        $pgsql = "INSERT INTO usuario VALUES (" . $this->pdo->quote($usuario) . ")";
        $this->pdo->query($pgsql);
        return "Usuario $usuario";
    }


    public function clave()
    {
        $pgsql = "SELECT what FROM usuario";
        $stmt = $this->pdo->query($pgsql);
        return $stmt->fetchColumn();
    }
}
