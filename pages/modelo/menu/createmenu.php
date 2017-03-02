<?php
session_start();
?>
<?php
$rol = $_GET['rol'];
include_once("menuCollector.php");
$DemoCollectorObj = new menuCollector();
?>

<html>
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
    <a href="#"><h2>REGISTRO DE MENUS</h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese datos del menu</p>

     <?php echo "<form action='savemenu.php?rol=$rol' method='post'>";?>  
      <div class="form-group has-feedback">
        <input type="text" name="descripcion" class="form-control" placeholder="Descripcion" required="required">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div> 
      <div class="form-group">
            <label>Estado</label>
            <select class="form-control select2" style="width: 100%;" name="estado">
                  <option selected>A</option>
                  <option>I</option>
            </select>
      </div> 
      <div class='box-footer'>
            <?php echo "<a href='readmenu.php?rol=$rol'><button type='button' class='btn btn-default'>CANCELAR</button></a>";?>
            <?php echo "<a href='savemenu.php?rol=$rol'><button type='submit' class='btn btn-info pull-right'>REGISTRAR</button></a>";?>
        </div>
    </form>

    

  </div>
  <!-- /.form-box -->
</div>
</body>
</html>
