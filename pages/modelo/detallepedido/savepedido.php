<?php

session_start();
include_once("detalleCollector.php");

include_once("../Plato/platoCollector.php");

$usuario = $_SESSION['torres'];
$id_plato = $_POST['id_plato'];
$id_pedido = $_POST['id_pedido'];
$nombre = $_POST['nombre'];

$cantidad = $_POST['cantidad'];


$DemoCollectorObj = new detalleCollector;
$PlatoCollectorObj = new platoCollector();


foreach ($PlatoCollectorObj->showplatos() as $c){
      if($id_plato=$c->getid_plato()) {
          $precio = $c->getprecio();
      }               
    
 }

$total2 = $cantidad *$precio;

?>





<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="estilo.css" rel="stylesheet">
        
         <body>
  
        <?php
         
        $totalVenta  =  $cantidad*$cantidad;
        $DemoCollectorObj->createpedido($id_plato,$id_pedido,$nombre,$cantidad,$precio,$total2);
        $mensaje = "EL detalle del pedido se grabo correctamente";
        
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readpedido.php?rol=A'>";   
        
        ?>
  
    </body>
    	
    
    </head>
    <body>
  
    </body>
</html>
