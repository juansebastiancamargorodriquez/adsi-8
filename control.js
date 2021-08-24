/*=============================================
EDITAR ACTIVO 
=============================================*/
$(document).on("click", ".btnEditarControl", function(){
 	
	var id = $(this).attr("id");
	var datos = new FormData();
	datos.append("id", id);

	$.ajax({
		url:"ajax/control.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function($desarrollo){		
	

			$("#editarIdActivos").val($desarrollo["id"]);
			$("#editarconcepto").val($desarrollo["concepto"]);
			$("#editardescripcion").val($desarrollo["descripcion"]);
			$("#editarescenario").val($desarrollo["escenario"]);
						
			}

		})

	});


/*=============================================
ELIMINAR ACTIVO
=============================================*/

$(document).on("click", ".btnEliminarControl", function(){
  
  var nombrecompleto = $(this).attr("concepto");
  var cedulacompleta = $(this).attr("descripcion");
  var id = $(this).attr("id");

  swal({
    title: '¿Está seguro de borrar el atributo?',
    text: "¡Si no lo está puede cancelar la accíón!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      cancelButtonText: 'Cancelar',
      confirmButtonText: 'Si, borrar el funcionario!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=control&concepto="+nombrecompleto+"&descripcion="+cedulacompleta+"&id="+id;

    }


  })

})



