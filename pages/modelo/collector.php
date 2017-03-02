<?php
include_once('database.php');

// Define configuration
define("DB_HOST", "ec2-54-235-173-161.compute-1.amazonaws.com");
define("DB_USER", "afdryhizzhanik");
define("DB_PASS", "7e57768e3d008db2326a5a85e2f419ce4f342943230fd4eb0fd6b9e75e042748");
define("DB_NAME", "dcs5r4uj8p9su5");


class Collector extends database
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
