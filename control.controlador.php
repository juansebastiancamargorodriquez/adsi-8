<?php

class ControladorControl{

	/*=============================================
	REGISTRO DE FUNCIONARIOS
	=============================================*/

	static public function ctrCrearControl(){

		if(isset($_POST["nuevoconcepto"])){

			if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevodescripcion"])&&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoescenario"])){ 
			   
				$tabla = "calidad";
				
				$datos = array("concepto" => $_POST["nuevoconcepto"],
								"descripcion" => $_POST["nuevodescripcion"],
								"escenario" => $_POST["nuevoescenario"],
								"referencia"=> $_POST["nuevoinformacion"]);
							
								
					       
					
				$respuesta = ModeloControl::mdlIngresarControl($tabla, $datos);

				if($respuesta == "ok"){
				

					echo '<script>

					swal({

						type: "success",
						title: "¡El atributo ha sido guardado correctamente!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "control";

						}

					});
				

					</script>';


				}


			}else{

				echo '<script>

					swal({

						type: "error",
						title: "¡El atributo no puede ir vacío o llevar caracteres especiales!",
						showConfirmButton: true,
						confirmButtonText: "Cerrar"

					}).then(function(result){

						if(result.value){
						
							window.location = "control";

						}

					});
				

				</script>';

			}


		}
		


	}


	/*=============================================
	MOSTRAR FUNCIONARIO
	=============================================*/

	static public function ctrMostrarControl($item , $valor){
		
		$tabla = "calidad";

		$desarrollo = ModeloControl::MdlMostrarControl($tabla,$item,$valor);

		return $desarrollo;

	}

	/*=============================================
	EDITAR FUNCIONARIO
	=============================================*/

	static public function ctrEditarControl(){
				
	$tabla = "calidad";	

	if(isset($_POST['editarIdActivos'])){

	if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editardescripcion"])&&
			   preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["editarconcepto"])){ 
																				
				$datos = array("concepto" =>$_POST["editarconcepto"],
								"descripcion" =>$_POST["editardescripcion"],
								"escenario" =>$_POST["editarescenario"],	
								"referencia" =>$_POST["editarinformacion"],								
					       	"id"=>$_POST["editarIdActivos"]);	


					$desarrollo = ModeloControl::mdlEditarControl($tabla,$datos);

					if($desarrollo == "ok"){
					
					echo'<script>

					swal({

						  type: "success",
						  title: "El atributo ha sido editado correctamente",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"

						  }).then(function(result){

									if (result.value) {

									window.location = "control";

									}
								});


					</script>';
				
				}
				
			}else{

				echo'<script>

					swal({
						  type: "error",
						  title: "¡El atributo no puede ir vacío o llevar caracteres especiales!",
						  showConfirmButton: true,
						  confirmButtonText: "Cerrar"

						  }).then(function(result){
							if (result.value) {

							window.location ="control";

							}
						});

			  	</script>';
			  	
			
		}
	}
 }

    /*=============================================
	BORRAR FUNCIONARIO
	=============================================*/

	static public function ctrBorrarControl(){

		if(isset($_GET["id"])){

			$tabla ="calidad";

			$datos = $_GET["id"];

			$respuesta = ModeloControl::mdlBorrarControl($tabla, $datos);

			if($respuesta == "ok"){

				echo'<script>

				swal({
					  type: "success",
					  title: "El atributo ha sido borrado correctamente",
					  showConfirmButton: true,
					  confirmButtonText: "Cerrar"
					  }).then(function(result){
								if (result.value) {

								window.location = "control";

								}
							})

				</script>';

			}		

		}
	}



	/*=============================================
	MOSTRAR 
	=============================================*/

	static public function ctrMostrarControlPropio($item, $valor){

		$tabla = "control";

		$respuesta = ModeloControl::MdlMostrarControlPropio($tabla, $item, $valor);

		return $respuesta;
	}

	/*=============================================
	MOSTRAR PERFILES
	=============================================*/


	static public function ctrMostrarPerfiles(){

		$tabla = "usuarios_perfiles";

		$respuesta = ModeloPrestadores::mdlMostrarPerfilesactivo($tabla);

		return $respuesta;
	}

}







	