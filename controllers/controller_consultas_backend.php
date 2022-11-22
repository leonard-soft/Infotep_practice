<?php
session_start();
require_once( "../models/models_admin.php");

class ConsultasDB extends DBConfig {
    					
	function consulta_generales($sql){
		$this->config();
		$this->conexion(); 
		  
  		$records = $this->Consultas($sql);		 		  		  		  

  		$this->close();		
		return $records;				
	}
}

/**
* IMPLEMENTACION DE ACCESO A CONSULTAS PARA PROTEGER MAS LA VISTA
*/
class ExtraerDatos extends ConsultasDB
{
		
	//MUESTRA LISTADO DE USUARIOS
	function listadoUsuarios($start=0, $regsCant = 0){
		$sql = "SELECT * FROM usuarios";
		if ($regsCant > 0 )
			 $sql = "SELECT * from usuarios $start,$regsCant";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}
	// DETALLE DE USUARIOS SELECICONADA SEGUN ID
	function usuariosDetalle($idu){
		$sql = "SELECT * from usuarios where id=$idu ";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}

	// ****************************************************************************
	// Agregue aqui debajo el resto de Funciones - Se ha dejado  Listado y detalle
	// ****************************************************************************

	// LISTADO  
	function listadoTaba($start=0, $regsCant = 0){
		$sql = "SELECT * FROM tabla";
		if ($regsCant > 0 )
			 $sql = "SELECT * from tabla $start,$regsCant";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}
	// DETALLE SEGUN ID
	function tablaDetalle($idu){
		$sql = "SELECT * from usuarios where id=$idu ";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}

	// LISTADO DE PRODUCTOS 
	function listadoProductos($start=0, $regsCant = 0){
		$sql = "SELECT * FROM productos";
		if ($regsCant > 0 )
			 $sql = "SELECT * from productos $start,$regsCant";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}
	// DETALLE DE PRODUCTOS 
	function productoPorId($idFilter){
		$sql = "SELECT * FROM productos WHERE cod=$idFilter";
		if ($regsCant > 0 )
			 $sql = "SELECT * from productos $start,$regsCant";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}
	// DETALLE DE PRODUCTOS SEGUN COINCIDENCIA
	function productoPorIdCoinc($idFilter){
		$sql = "SELECT * FROM productos WHERE nombre like '%$idFilter%' ";
		if ($regsCant > 0 )
			 $sql = "SELECT * FROM productos WHERE nombre like '%$idFilter%' $start,$regsCant";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}
	// LISTADO DE PRODUCTOS 
	function listadoClientes($start=0, $regsCant = 0){
		$sql = "SELECT * FROM clientes";
		if ($regsCant > 0 )
			 $sql = "SELECT * from clientes $start,$regsCant";
		$lista = $this->consulta_generales($sql);	
		return $lista;
	}
	
}//fin CLASE

?>
