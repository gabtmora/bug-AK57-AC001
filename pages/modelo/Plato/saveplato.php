<?php
session_start();
include_once("platoCollector.php");
$descripcion = $_POST['descripcion'];
$precio =  $_POST['precio'];
$estado = $_POST['estado'];

$platoCollectorObj = new platoCollector();
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
        
        	$platoCollectorObj->createplato($descripcion, $precio,$estado);
        	$mensaje = "EL PLATO SE INGRESO EXITOSAMENTE";
		print "<script>alert('$mensaje')</script>";
		echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readplato.php?rol=A'>";		
        ?>
        
        
    </body>
</html>
