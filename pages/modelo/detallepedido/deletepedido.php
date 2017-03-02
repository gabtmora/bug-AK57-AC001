<?php
session_start();


include_once("detalleCollector.php");

$id_detalle = $_GET['id_detalle'];


$DemoCollectorObj = new detalleCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
        <?php
       
        $DemoCollectorObj->deletepedido($id_detalle);
        $mensaje = "SE ELIMINO EL DETALLE PEDIDO";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readpedido.php?rol=A'>";
        ?>
        
  
    </body>
</html>
