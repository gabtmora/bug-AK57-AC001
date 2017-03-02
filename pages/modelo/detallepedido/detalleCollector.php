<?php

include_once('../Plato/plato.php');
include_once('../collector.php');
include_once('detpedido.php');

class detalleCollector extends collector
{
  
 
  
  function consulta($busqueda){
  	$sql="select * from plato  where descripcion  like '%$busqueda%' or id_plato='$busqueda'";
  	$error="<div class='error'>Error al buscar el producto</div>";
  	$arrayplato= array();
   $consulta= self::$db->getRows($sql);
  		
  	 	
  	foreach ($consulta as $c){
  		$aux = new plato($c{'id_plato'},$c{'descripcion'},$c{'precio'},$c{'estado'},$c{'tipo_plato'});
  	
  	  		array_push($arrayplato, $aux);
  	}
  	return $arrayplato;
  	

 
  }
  
  function consulta2($busqueda){
  	$sql="select * from plato  where  id_plato='$busqueda'";
  	$error="<div class='error'>Error al buscar el producto</div>";
  	$arrayplato= array();
  	$consulta= self::$db->getRows($sql);
  
  		
  	foreach ($consulta as $c){
  		$aux = new plato($c{'id_plato'},$c{'descripcion'},$c{'precio'},$c{'estado'},$c{'tipo_plato'});
  		 
  		array_push($arrayplato, $aux);
  	}
  	return $arrayplato;
  	 
  
  
  }
  
  function showmenus() {
  	$rows = self::$db->getRows("SELECT * FROM  detalle_pedido ");
  	##echo "linea 1";
  	$arraymenu= array();
  	foreach ($rows as $c){
  		$aux = new detpedido($c{'id_detalle'},$c{'id_plato'},$c{'id_pedido'},$c{'descripcion'},$c{'cantidad'},$c{'precio'},$c{'total'});

  
  
  
  		array_push($arraymenu, $aux);
  	}
  	return $arraymenu;
  }
  
    
    function createpedido($id_plato,$id_pedido,$descripcion,$cantidad,$precio,$total) {
        $rows = self::$db->insertRow("INSERT INTO detalle_pedido (id_plato, id_pedido,descripcion,cantidad,precio,total) VALUES ('$id_plato', '$id_pedido','$descripcion',$cantidad,$precio,$total)",null);
        
    }
    
    
   

    
    function updatepedido($id_detalle,$id_plato,$nombre,$id_pedido,$cantidad,$precio,$total2) {
        $rows = self::$db->updateRow("UPDATE detalle_pedido SET cantidad=$cantidad,
        precio=$precio, total=$total2, id_plato=$id_plato,descripcion='$nombre', id_pedido=$id_pedido  WHERE id_detalle=$id_detalle",null);
        
    }
    
     function deletepedido($id_detalle) {
         $rows = self::$db->deleteRow("DELETE FROM detalle_pedido WHERE id_detalle ='$id_detalle'",null);
         
   
   }
   
    
    
  
 }
?>

