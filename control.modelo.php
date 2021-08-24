<?php

require_once "conexion.php";

class ModeloControl{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function MdlMostrarControl($tabla , $item , $valor ){
		

		if($item != null){
			
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla where $item = :$item");
			
			$stmt -> bindParam(":". $item,$valor, PDO::PARAM_STR ,PDO::PARAM_INT);

			$stmt -> execute(); 

			return $stmt -> fetch();		
			
		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();	

		}	


		$stmt -> close();

		$stmt = null;

		
	}
/*=============================================
	REGISTRO DE ACTIVOS 
	=============================================*/

	static public function mdlIngresarControl($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (concepto , descripcion , escenario , referencia )  VALUES ( :concepto , :descripcion , :escenario ,:referencia)");

		$stmt->bindParam(":concepto", $datos["concepto"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":escenario", $datos["escenario"], PDO::PARAM_STR);
		$stmt->bindParam(":referencia", $datos["referencia"], PDO::PARAM_STR);
				

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";
		
		}

		$stmt->close();
		
		$stmt = null;

	}
	
	

	/*=============================================
	EDITAR ACTIVO
	=============================================*/

	static public function mdlEditarControl($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET concepto=:concepto , descripcion=:descripcion , escenario=:escenario , referencia=:referencia  WHERE id=:id");		

		$stmt ->bindParam(":concepto",$datos["concepto"], PDO::PARAM_STR);
		$stmt ->bindParam(":descripcion",$datos["descripcion"], PDO::PARAM_STR);
		$stmt ->bindParam(":escenario",$datos["escenario"], PDO::PARAM_STR);
		$stmt ->bindParam(":referencia",$datos["referencia"], PDO::PARAM_STR);		
		$stmt ->bindParam(":id",$datos["id"], PDO::PARAM_INT);
		
	
		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;

	}
	
	
	/*=============================================
	BORRAR ACTIVO
	=============================================*/

	static public function mdlBorrarControl($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";
		
		}else{

			return "error";	

		}

		$stmt -> close();

		$stmt = null;


	}

	}
