<?php
session_start();
?>
<?php
include_once("detalleCollector.php");
$usuario = $_SESSION['torres'];
/* $id_detalle = $_GET['id_detalle'];
$id_plato = $_GET['id_plato'];
$id_pedido = $_GET['id_pedido'];
$cantidad = $_GET['cantidad'];
$precio = $_GET['precio'];
$total = $_GET['total']; */


/*$carrito= $_SESSION['carrito'];*/


$DemoCollectorObj = new detalleCollector; 
?>






<body>
    <?php
		  if (isset($_SESSION['torres'])){
    ?>

<head>
	<meta charset="utf-8">
	<title>Menu</title>
    <link rel="stylesheet" href="../../../css/estilotabla.css">
          
</head>
    <header>
        <h1>Administrador</h1>
        <div class="usuario">
        <?php
	    echo "<p>Hola" . $_SESSION['torres'] . "</p>";
		    
        ?>
        </div>
     </header>
    
    
    <h1>Menus</h1>
    <a href="createpedido.php"><button>CREAR</button></a>

    <table class="rwd-table">
        <tr>    
            <th>id_detalle</th>
            <th>id_plato</th>
            <th>id_pedido</th>
            <th>descripcion</th>
            <th>cantidad</th>
            <th>precio</th>
              <th>total</th>
              
            
        </tr>
  
        <?php
            foreach ($DemoCollectorObj->showmenus() as $c){
            echo "<tr>";
            echo "<td>" . $c->getid_detalle() . "</td>";                       
	    echo "<td>" . $c->getid_plato() . "</td>"; 
	    echo "<td>" . $c->getid_pedido() . "</td>";
	    echo "<td>" . $c->getdescripcion() . "</td>";
	    echo "<td>" . $c->getcantidad() . "</td>";
	    echo "<td>" . $c->getprecio() . "</td>";
	    echo "<td>" . $c->gettotal() . "</td>";
	    
	    
	    
        echo "<td><a href='updatepedido.php?id_detalle=". $c->getid_detalle()  ." & id_plato=". $c->getid_plato()." & id_pedido=". $c->getid_pedido()  ." & descripcion=". 
        $c->getdescripcion() . " & cantidad=". $c->getcantidad()." & precio=". $c->getprecio()." & total=". $c->gettotal(). "'><button>Editar</button></a></td>";    
	    echo "<td><a href='deletepedido.php?id_detalle=". $c->getid_detalle() ."'><button>Eliminar</button></a></td>";

            echo "</tr>"; 
            
                
        }
  	    echo "<a href='../../admin.php?rol=A'><button>SALIR</button></a>";

        ?>

    </table>

    <?php
                          }else{   
                               echo "<meta HTTP-EQUIV='REFRESH' CONTENT='1;URL=../../login.php'>";
                             } 
                        ?>
 
</body>
</html>

