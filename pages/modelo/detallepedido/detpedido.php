<?php

class detpedido
{
	private $id_plato;
	private $id_pedido;
	private $descripcion;
	private $cantidad;
	private $precio;
	private $total;
	private $id_detalle;
	
	function __construct($id_detalle,$id_plato , $id_pedido, $descripcion, $cantidad, $precio,$total) {
		
		$this->id_detalle = $id_detalle;
		$this->id_plato = $id_plato;
		$this->id_pedido = $id_pedido;
		
		$this->descripcion = $descripcion;
		$this->cantidad = $cantidad;
		$this->precio = $precio;
		$this->total = $total;
		
	
		
	
	}
	
	
	function setId_id_detalle($id_detalle){
		$this->id_detalle = $id_detalle;
	}
	function getid_detalle(){
		return $this->id_detalle;
	}


	function setId_id_plato($id_plato){
		$this->id_plato = $id_plato;
	}
	function getid_plato(){
		return $this->id_plato;
	}
	
	
	function setId_id_pedido($id_pedido){
		$this->id_pedido = $id_pedido;
	}
	function getid_pedido(){
		return $this->id_pedido;
	}
	function setdescripcion($descripcion){
		$this->descripcion = $descripcion;
	}
	function getdescripcion(){
		return $this->descripcion;
	}

	function setcantidad($cantidad){
		$this->cantidad = $cantidad;
	}
	function getcantidad(){
		return $this->cantidad;
	}

	function setprecio($precio){
		$this->precio = $precio;
	}
	function getprecio(){
		return $this->precio;
	}
	function settotal($total){
		$this->total = $total;
	}
	function gettotal(){
		return $this->total;
	}
	
}

?>