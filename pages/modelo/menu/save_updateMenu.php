<?php
session_start();
?>
<?php
include_once("menuCollector.php");
$ID = $_POST['ID'];
$descripcionModificada = $_POST['descripcionModificada'];
$estado2 = $_POST['estado'];

$menuCollectorObj = new menuCollector();
?>
<?php
    $rol = 'A';
    $descripcion = $_GET['descripcion'];
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
        #$estado2 = substr ("$estado", 0,1);
        #if(trim($descripcion) == trim($descripcionModificada)){
        #    $menuCollectorObj->updatemenu($ID, $descripcionModificada, $estado2);
        #    $mensaje = "EL MENU SE MODIFICO EXITOSAMENTE";
        #    print "<script>alert('$mensaje')</script>";
        #    echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readmenu.php?rol=$rol'>";
        #}
        #else{
        #    if($menuCollectorObj->buscarMenu($descripcionModificada)){
         #   $mensaje = "ERROR EL MENU YA SE ENCUENTRA REGISTRADO";
          #  print "<script>alert('$mensaje')</script>";
           # echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=updatemenu.php?ID=$ID & descripcion=$descripcion & estado=$estado & rol=$rol'>";
        #    }
        #    else{
         $menuCollectorObj->updatemenu($ID, $descripcionModificada, $estado2);
            $mensaje = "EL MENU SE MODIFICO EXITOSAMENTE";
            print "<script>alert('$mensaje')</script>";
            echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=readmenu.php?rol=A'>";
         #   }
        #}
        ?>
    </body>
</html>