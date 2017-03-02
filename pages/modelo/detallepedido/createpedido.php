
<?php
include_once("detalleCollector.php");
include_once("../Plato/platoCollector.php");
include_once("../pedido/PedidoCollector.php");

$id =1;

session_start();
$DemoCollectorObj = new detalleCollector();
$PlatoCollectorObj = new platoCollector();
$PedidoCollectorObj = new PedidoCollector();

?>

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
    <a href="readpedido.php"><h2>REGISTRO DE PEDIDO</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese datos del menu</p>




    <form action="savepedido.php" method="post">
    
      <div class="form-group has-feedback">
           <label>Id_Plato</label>
           <?php
                     echo "<select name='id_plato'>";
                     foreach ($PlatoCollectorObj->showplatos() as $c){
                        echo "<option>". $c->getid_plato()."</option>";
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
                        echo "<option>". $c->getId_pedido()."</option>";
                     }
                     echo "</select>";
                    ?>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
        <div class="form-group has-feedback">
        <input  name="nombre" class="form-control" placeholder="nombre">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
        <div class="form-group has-feedback">
        <input  name="cantidad" class="form-control" placeholder="cantidad">
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
