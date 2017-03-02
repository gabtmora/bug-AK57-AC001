<?php
session_start();
?>
<?php
include_once("menuCollector.php");
#$ID_menu =  $_POST['menu'];
$descripcion =  $_POST['descripcion'];
$estado2  =  $_POST['estado'];
$menuCollectorObj = new menuCollector();
?>
<?php
    $rol = $_GET['rol'];
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
        #$estado2 = substr("$estado", 0,1);
        #$miau=$menuCollectorObj->buscarMenu($descripcion);
        #if($miau=0){
         #   $mensaje = "ERROR EL MENU YA SE ENCUENTRA REGISTRADO";
          #  print "<script>alert('$mensaje')</script>";
           # echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=createmenu.php?rol=$rol'>";
        #}
        #else{
      
        $menuCollectorObj->createmenu($descripcion, $estado2);
        $mensaje = "EL MENU SE CREO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readmenu.php?rol=$rol'>";
        
        ?>
  
    </body>
</html>
