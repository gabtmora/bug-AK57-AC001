<?php
session_start();
?>
<?php
include_once("platoCollector.php");
$rol = 'A';

$id =2;

$DemoCollectorObj = new platoCollector();

?>

<html>
<head>
	<meta charset="utf-8">
	<title>Platos</title>
    <link rel="stylesheet" href="../../../css/estilotabla.css">
          
</head>
<body>
    <?php
		  if (isset($_SESSION['torres'])){
    ?>
    <header>
        <h1>Administrador</h1>
        <div class="usuario">
        <?php
	    echo "<p>Hola" . $_SESSION['torres'] . "</p>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>platos</h1>
    <a href="createplato.php"><button>CREAR</button></a>

    <table class="rwd-table">
        <tr>    
            <th>id_plato</th>
            <th>descripcion</th>
            <th>estado</th>
            <th>precio</th>
            <th>Editar</th>
            <th>Eliminar</th>
            
              
            
        </tr>
        
 
  
        <?php
            foreach ($DemoCollectorObj->showplatos() as $c){
            echo "<tr>";
            echo "<td>" . $c->getid_plato(). "</td>";                       
	        echo "<td>" . $c->getdescripcion() . "</td>";   
	        echo "<td>" . $c->getestado() . "</td>";
	        echo "<td>" . $c->getprecio() . "</td>";
	    
	    
        echo "<td><a href='updateplato.php? id_plato=". $c->getid_plato() ." & descripcion=". $c->getdescripcion() ." & estado=". $c->getestado() ." & precio=". $c->getprecio() . "'><button>Editar</button></a></td>";    
	    echo "<td><a href='deleteplato.php?id_plato=". $c->getid_plato() ."'><button>Eliminar</button></a></td>";

            echo "</tr>"; 
            
                
        }
  	    echo "<a a href='../../admin.php?rol=$rol'><button>SALIR</button></a>";

        ?>

    </table>
     <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../login.php'>";
                             } 
                        ?>

   
 
</body>
</html>

