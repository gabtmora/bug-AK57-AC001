<?php
session_start();
?>
<?php
include_once("menuCollector.php");
$ID = $_GET['ID'];
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
        $menuCollectorObj->deletemenu($ID);
        $mensaje = "EL MENU SE ELIMINO EXITOSAMENTE";
        print "<script>alert('$mensaje')</script>";
        echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readmenu.php?rol=$rol'>"; 
        ?>
       
  
    </body>
</html>
