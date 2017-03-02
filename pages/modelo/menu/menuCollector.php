<?php

include_once('menu.php');
include_once('../collector.php');

class menuCollector extends collector
{
  
  function showmenus() {
    $rows = self::$db->getRows("SELECT * FROM menu ");        
    ##echo "linea 1";
    $arraymenu= array();        
    foreach ($rows as $c){
      $aux = new menu($c{'id'},$c{'nombre'},$c{'estado'});
      array_push($arraymenu, $aux);
    }
    return $arraymenu;        
  }
    
  function buscarMenu($menu) {
    $rows = self::$db->getRows("SELECT * FROM menu WHERE nombre='$menu'");               
    foreach ($rows as $c){    
      return 1;
    }
      if($rows>0){    
      return 2;
    }
    return 0;          
  }
    
    
    function createmenu($nombre,$estado) {
     
        $rows = self::$db->insertRow("INSERT INTO menu (nombre,estado) VALUES ('$nombre','$estado')",null);
        
    }
    
    function updatemenu($id,$nombre,$estado) {
        $rows = self::$db->updateRow("UPDATE menu SET nombre='$nombre', estado='$estado' WHERE id='$id'",null);
    }
    
     function deletemenu($ID) {
         $rows = self::$db->deleteRow("DELETE FROM menu WHERE id ='$ID'",null);
         
   }  
  
 }
?>

