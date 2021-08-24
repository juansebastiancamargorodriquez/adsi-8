<div class="content-wrapper" >


  <section class="content-header">
    
    <center><h1>
      
      ATRIBUTOS DE CALIDAD

    </h1></center>

    <ol class="breadcrumb">
      
      <li><a href="control"><i class="fa fa-dashboard"></i> Inicio</a></li>
       <li><a href="contactame"><i class="fa fa-dashboard"></i> Contacto</a></li>
      
        
    </ol>

  </section>

  <section class="content">
  

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
            <th style="width:10px; font-size: 90%;">N-°</th>
            <th style="width:10px; font-size: 90%;">NOMBRE COMPLETO</th>
            <th style="width:10px; font-size: 90%;">BREVE DESCRIPCION</th>
            <th style="width:10px; font-size: 90%;">ESCENARIO</th>
            <th style="width:10px; font-size: 90%;">MIRA MAS AQUI</th>
            <th style="width:10px; font-size: 90%;">ACCIONES</th> 

         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;

        $valor = null;
        
        

        $activos = ControladorControl::ctrMostrarControl($item,$valor);

        foreach ($activos as $key => $value){
          
            echo ' <tr>
                  <td>'.$value["id"].'</td>
                  <td>'.$value["concepto"].'</td>
                  <td>'.$value["descripcion"].'</td>
                  <td>'.$value["escenario"].'</td>
                  <td><a href="'.$value["referencia"].'" target="_blank">OPRIME AQUI</a></td>';
                  

                                        
                                                                   

          echo '  <td valign="top" style="font-size:80%">

                    <div class="btn-group">                  
                      
                     <button class="btn btn-danger btn-xs  btnEliminarControl" id="'.$value["id"].'" nombrecompleto="'.$value["concepto"].'" cedulacompleta="'.$value["descripcion"].'"><i class="fa fa-times"></i></button>
        
                    </div> 

                  </td>

                </tr>';

        }


        ?>
          
        </tbody>

       </table>

      </div>

    </div>


  <!--=====================================
MODAL EDITAR ACTIVO
======================================-->

<div id="modalEditarControl" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <center> <h4 class="modal-title">EDITAR ATRIBUTO DE CALIDAD</h4> </center>

        </div>

       <!--=====================================
        CUERPO DEL MODAL
        ======================================-->     

          <!-- ENTRADA PARA TRAER EL NOMBRE -->
            
            <div class="form-group">
              
              <center><label class="form-control">NOMBRE COMPLETO</label></center>

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span> 

                <input type="text" class="form-control input-lg" name="editarconcepto" id="editarconcepto"  placeholder="Nombre del atributo">
              
             <input type="hidden" id="editarIdActivos" name ="editarIdActivos" value="">

            </div>

            </div>

        <!-- ENTRADA PARA TRAER LA DESCIPCION -->
            
            <div class="form-group">

              <center><label class="form-control">DESCRIPCION</label></center>

              <div class="input-group">
                              
                <span class="input-group-addon"><i class="fa fa-microchip"></i></span> 

                <input type="text" class="form-control input-lg" name="editardescripcion" id="editardescripcion"  placeholder="Descripcion del atributo">

              </div>

            </div>

            <!-- ENTRADA PARA EL escenario -->
            
            <div class="form-group">

              <center><label class="form-control">ESCENARIO</label></center>

              <div class="input-group">
                              
                <span class="input-group-addon"><i class="fa fa-file"></i></span> 

                <input type="text" class="form-control input-lg" name="editarescenario" id="editarescenario"  placeholder="Editar escenario del atributo">

              </div>

            </div>   

            <!-- ENTRADA PARA otro modulo-->
            
            <div class="form-group">

              <center><label class="form-control">INFORMACION</label></center>

              <div class="input-group">
                              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="editarinformacion" id="editarinformacion"  placeholder="Editar informacion del atributo">

              </div>

            </div>            
              
        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">EDITAR FUNCIONARIO</button>

        </div>

     <?php

        $EditarControl = new ControladorControl();
        $EditarControl -> ctrEditarControl(); 

        ?> 

      </form>

    </div>

  </div>

</div>

  </section>

</div>


<!--=====================================
MODAL AGREGAR FUNCIONARIOS
======================================-->

<div id="modalAgregarControl" class="modal fade" role="dialog" style="overflow-y: scroll">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

         <center><h4 class="modal-title">AGREGAR ATRIBUTO</h4> </center> 

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="body">

           
      <!-- ENTRADA PARA TRAER EL NOMBRE -->
            
            <div class="form-group">
              
              <center><label class="form-control">NOMBRE COMPLETO</label></center>

              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-address-card"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoconcepto" id="nuevoconcepto"  placeholder="Nombre del atributo">                          

            </div>

            </div>

        <!-- ENTRADA PARA TRAER LA DESCIPCION -->
            
            <div class="form-group">

              <center><label class="form-control">DESCRIPCION</label></center>

              <div class="input-group">
                              
                <span class="input-group-addon"><i class="fa fa-microchip"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevodescripcion" id="nuevodescripcion"  placeholder="Descripcion del atributo">

              </div>

            </div>

            <!-- ENTRADA PARA EL escenario -->
            
            <div class="form-group">

              <center><label class="form-control">ESCENARIO</label></center>

              <div class="input-group">
                              
                <span class="input-group-addon"><i class="fa fa-file"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoescenario" id="nuevoescenario"  placeholder="Nuevo escenario del atributo">

              </div>

            </div>  

             <!-- ENTRADA PARA otro modulo-->
            
            <div class="form-group">

              <center><label class="form-control">INFORMACION</label></center>

              <div class="input-group">
                              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoinformacion" id="nuevoinformacion"  placeholder="Nueva informacion del atributo">

              </div>

            </div>       

          
       <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar atributo</button>

        </div>

        <?php

          $CrearControl = new ControladorControl();
          $CrearControl -> ctrCrearControl();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

$objControl = new ControladorControl();
$objControl->ctrBorrarControl();

?>




 













        

        