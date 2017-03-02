<?php
session_start();
include_once("platoCollector.php");

$id_plato = $_POST['id_plato'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$estado = $_POST['estado'];


$tipo_plato ;

echo $estado ;



$PlatoCollectorObj = new platoCollector();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link href="../estilo.css" rel="stylesheet">
    	
    
    </head>
    <body>
      <?php
       
        $PlatoCollectorObj->updateplato($id_plato,$descripcion,$precio,$estado);
		$mensaje = "SE MODIFICO EL PLATO";
		print "<script>alert('$mensaje')</script>";
		echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readplato.php?rol=A'>";		
        
        ?>   
    
       
    </body>
</html>
