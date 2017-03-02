<?php
session_start();
?>
<?php
include_once("platoCollector.php");
$usuario = $_SESSION['torres'];
$id =1;

$DemoCollectorObj = new platoCollector();

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
    <a href="../index.html"><h2>REGISTRO DE PLATOS </h2></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Ingrese datos del plato</p>

    <form action="saveplato.php" method="post" enctype="multipart/form-data">
      <div class="form-group has-feedback">
        <input  name="descripcion" class="form-control" placeholder="descripcion">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input  name="precio" class="form-control" placeholder="precio">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        
        
           <div class="form-group">
                <label>ESTADO</label>
                <select class="form-control select2" style="width: 100%;" name="estado">
                  <option selected="selected">A</option>
                  <option>I</option>
                </select>
        </div>
          

        <div class="form-group has-feedback">
        
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
