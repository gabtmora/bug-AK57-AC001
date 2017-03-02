<?php
session_start();
include_once("platoCollector.php");

$id_plato = $_GET['id_plato'];


$DemoCollectorObj = new platoCollector();
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
        
        $DemoCollectorObj->deleteplato($id_plato);
        $mensaje = "SE ELIMINO EL PLATO";
		print "<script>alert('$mensaje')</script>";
		echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readplato.php?rol=A'>";		
        
        ?>
        
    </body>
</html>
