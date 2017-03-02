<?php
session_start();
?>
<?php
include_once("menuCollector.php");
$usuario = $_SESSION['torres'];
$ID = $_GET['ID'];
$descripcion = $_GET['descripcion'];
$estado = $_GET['estado'];
$rol = $_GET['rol'];
$menuCollectorObj = new menuCollector();
?>

<DOCTYPE html>
<html lang ="es">
<head>
	<meta charset="utf-8">
	<title>Usuario </title>
    <link rel="stylesheet" href="../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">     
</head>
    
<body class="hold-transition register-page">
    <div class="register-box">
  <div class="register-logo">
    <a href="../index.html"><h2>MODIFICANDO MENUS</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese los Datos</p>

    <?php echo "<form class='form-horizontal' method='post' action='save_updateMenu.php?rol=$rol & descripcion=$descripcion'>";?>
                      <?php
                        echo "<div class='box-body'>
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>ID</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' readonly='readonly' id='inputEmail3' name='ID' value='". $ID ."'>
                                        </div>
                                    </div>
                                    
                                    <div class='form-group'>
                                        <label for='text' class='col-sm-2 control-label'>Descripcion</label>
                                        <div class='col-sm-10'>
                                            <input type='text' class='form-control' id='inputEmail3' name='descripcionModificada' value='". $descripcion ."'>
                                        </div>
                                    </div>
                                    <div class='form-group'>
                                        <label class='col-sm-2 control-label'>Estado</label>
                                        <div class='col-sm-10'>
                                        <select class='form-control select2' style='width: 100%;' name='estado'>
                                            <option selected>A</option>
                                            <option>I</option>
                                        </select>
                                        </div>
                                    </div> 
                                    
                              </div>";
                       echo "<div class='box-footer'>
                                <a href='readmenu.php?rol=$rol'><button type='button' class='btn btn-default'>CANCELAR
                                </button>
                                </a>
                                <a href='save_updatePedido.php?ID=". $ID ."'>
                                    <button type='submit' class='btn btn-info pull-right'>MODIFICAR</button>
                                </a>
                            </div>";
                    ?>
                </form>
  </div>
  <!-- /.form-box -->
</div>
    
    </body>
</html>
