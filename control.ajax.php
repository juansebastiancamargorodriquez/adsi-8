<?php

require_once "../controladores/control.controlador.php";
require_once "../modelos/control.modelo.php";

class AjaxControl{

	/*=============================================
	EDITAR ACTIVO
	=============================================*/	

	public $id;

	public function ajaxEditarControl(){

		$item = 'id';

		$valor = $this->id;
		
		$desarrollo = ControladorControl::ctrMostrarControl($item , $valor);
		
		echo json_encode($desarrollo);

	}

	/*=============================================
	VALIDAR EL NOMBRE 
	=============================================*/

	if(isset( $_POST["validarControl"])){

	$validarControl = new AjaxControl();
	$validarControl -> validarControl = $_POST["validarControl"];
	$validarControl -> ajaxValidarControl();

	}

	/*=============================================
	EDITAR ACTIVOS 
	=============================================*/

	if(isset($_POST["id"])){
		
		$objControl =  new AjaxControl(); 
		$objControl -> id = $_POST["id"];
		$objControl -> ajaxEditarControl();	 

	}

	/*=============================================
	ACTIVOS
	=============================================*/

	if(isset($_POST['activarControl'])){
    $activarControl = new AjaxControl();
    $activarControl -> activarControl =$_POST['activarControl'];
    $activarControl -> activarId=$_POST['activarId'];
    $activarControl ->ajaxActivarControl();
  }
  
	
			

