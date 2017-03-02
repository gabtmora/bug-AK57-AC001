<?php
session_start();
?>
<?php
include_once("../Plato/platoCollector.php");
include_once("../pedido/PedidoCollector.php");
include_once("detalleCollector.php");

$usuario = $_SESSION['torres'];
 $id_detalle = $_GET['id_detalle'];
 $id_plato = $_GET['id_plato'];
 $id_pedido = $_GET['id_pedido'];
 $nombre = $_GET['descripcion'];
 $cantidad = $_GET['cantidad'];
 $precio = $_GET['precio'];
 $total = $_GET['total']; 

 

$PlatoCollectorObj = new platoCollector();
$PedidoCollectorObj = new PedidoCollector();
$DemoCollectorObj = new detalleCollector;
?>

<DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Crear Pedido </title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
          
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="readpedido.php"><h2>MODIFICANDO DETALLE PEDIDO</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese datos del detalle pedido</p>




    <form action="save_updatepedido.php" method="post">
         <div class="form-group has-feedback">
             <?php
        echo "<input  name='id' class='form-control' value=".$id_detalle." placeholder='ID' readonly>";
              ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        
      <div class="form-group has-feedback">
           <label>Id_Plato</label>
           <?php
                     echo "<select name='id_plato'>";
                     foreach ($PlatoCollectorObj->showplatos() as $c){
                       
                          if ($id_pedido == $c->getid_plato()){
                                echo "<option selected>". $c->getid_plato()."</option>";
                            }else{   
                                echo "<option>". $c->getid_plato()."</option>";
                            }
                     }
                     echo "</select>";
                    ?>
       
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
         <label>Id_Pedido</label>
           <?php
                     echo "<select name='id_pedido'>";
                     foreach ($PedidoCollectorObj->showPedidos() as $c){
                        
                          if ($id_pedido == $c->getId_pedido()){
                                echo "<option selected>". $c->getId_pedido()."</option>";
                            }else{   
                                echo "<option>". $c->getId_pedido()."</option>";
                            }
                     }
                     echo "</select>";
                    ?>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
            <?php
        echo "<input  name='nombre' class='form-control' value=".$nombre."  placeholder='nombre'>";
             ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        <div class="form-group has-feedback">
             <?php
            echo "<input name='cantidad' class='form-control' value=".$cantidad."placeholder='cantidad'>";
             ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      
       <div class="form-group has-feedback">
         <?php
            echo "<input name='precio' class='form-control' value=".$precio." placeholder='precio' readonly>";
             ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
       <div class="form-group has-feedback">
         <?php
            echo "<input name='total' class='form-control' value=".$total." placeholder='total' readonly>";
             ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
  
 
   
        
      <div class="row">
        <div class="col-xs-8">
       
        </div>
        <!-- /.col -->
        <div >
                      
             <td width="148"><div align="center">
          <input type="submit" value="Guardar" class="btn btn-primary btn-block btn-flat" />
        </div></td>
           
           
        </div>
        <!-- /.col -->
      </div>
    </form>

    

  </div>
  <!-- /.form-box -->
</div>
</body>
</html>