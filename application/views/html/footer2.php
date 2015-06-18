    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <!-- <script src="<?php echo base_url();?>js/plugins/morris/raphael.min.js"></script> -->
    <!-- <script src="<?php echo base_url();?>js/plugins/morris/morris.min.js"></script> -->
    <!-- <script src="<?php echo base_url();?>js/plugins/morris/morris-data.js"></script> -->




    <!-- Modal de CREAR CATEGORIA -->
		    <div class="modal fade" id="modal_nueva_categoria">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Creaci&oacute;n de una categoria</h4>
			      </div>
			        <form action="<?php echo base_url().index_page();?>/administrador/reg_nueva_categoria" method="post">
					      <div class="modal-body">
					        <p>Nomre de la categoria a crear</p>
					        <input type="text" class="form-control" name="txtCategoria" id="txtCategoria">
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cerrar</button>
					        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Guardar</button>
					      </div>
			        </form>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

    <!-- FIN de Modal de CREAR CATEGORIA -->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <!-- Modal de CREAR PRODUCTO -->
		    <div class="modal fade" id="modal_nuevo_producto">
			  <div class="modal-dialog">
			    <div class="modal-content bs-callout bs-callout-info">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Creaci&oacute;n de un NUEVO Producto</h4>
			      </div>
			        <form action="<?php echo base_url().index_page();?>/administrador/reg_nuevo_producto" method="post" class="form-horizontal">
					      <div class="modal-body">
					      
								    <!-- Texto del nombre del producto-->
									<div class="control-group">
									  <label class="control-label" for="descripcion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Nomre del producto a crear</label>
									  <div class="controls">
									    <input id="descripcion" name="descripcion" type="text" data-toggle="tooltip" data-placement="left" title="Titulo del Producto" class="form-control">
									    <p class="help-block">nombre con qu se visualisara el producto.</p>
									  </div>
									</div>

								    <!-- CODIGo del nombre del producto-->
									<div class="control-group">
									  <label class="control-label" for="codigo"><span class="glyphicon glyphicon-qrcode	" aria-hidden="true"></span> CODIGO</label>
									  <div class="controls">
									    <input id="codigo" name="codigo" type="text" data-toggle="tooltip" data-placement="left" title="debe crear un codigo unico para este producto" class="form-control">
									    <p class="help-block">codigo unico para el producto.</p>
									  </div>
									</div>

								    <!-- Cantidad en el Inventario-->
									<div class="control-group">
									  <label class="control-label" for="cantidad"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> CANTIDAD en el Inventario</label>
									  <div class="controls">
									    <input id="cantidad" name="cantidad" type="text" data-toggle="tooltip" data-placement="left" title="Cantidad  de este producto en el Inventario" class="form-control">
									    <p class="help-block">Si desea inicializar el inventario con una cantidad de este producto</p>
									  </div>
									</div>

									<!-- Seleccion de categoria -->
									<div class="control-group">
									  <label class="control-label" for="categoria">Seleccione la Categoria</label>
									  <div class="controls">
									    <select id="categoria" name="categoria" class="form-control">
									    <?php 	
									    		if($this->session->userdata('categorias')):
									    			$categorias=$this->session->userdata('categorias');
									    			for ($i=0; $i < count($categorias); $i++) { 
									    				echo "<option value=\"".$categorias[$i]['id']."\"><span class=\"badge\">".$categorias[$i]['nombre_categoria']."</span></option>";
									    			}
									    		endif;
									    ?>
									    </select>
									  </div>
									</div>

									<div class="control-group">
							        <label class="control-label" for="compra">Precio de Compra</label>
							        <div class="input-group">
							          <div class="input-group-addon alert-info">Bs.</div>
							          <input type="text" class="form-control" name="compra" id="compra" placeholder="compra" data-toggle="tooltip" data-placement="top" title="Use (.) Punto como separador decimal. ejemplo 1480.20" >
							        </div>
							      </div>

									<div class="control-group">
							        <label class="control-label" for="venta">Precio de Venta</label>
							        <div class="input-group">
							          <div class="input-group-addon alert-success">Bs.</div>
							          <input type="text" class="form-control" name="venta" id="venta" placeholder="venta" data-toggle="tooltip" data-placement="top" title="Use (.) Punto como separador decimal. ejemplo 1480.20" >
							        </div>
							      </div>


									<div class="control-group"><br>
									      <div class="checkbox alert alert-warning">
		                                                <label>
		                                                    <input type="checkbox" name="exento" value="1"> Exento de I.V.A.
		                                                </label>
		                                  </div>
		                            </div>  

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cerrar</button>
					        <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Guardar</button>
					      </div>
			        </form>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

    <!-- FIN de Modal de CREAR PRODUCTO -->    
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->

<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <!-- Modal de MODIFICAR PRODUCTO -->
		    <div class="modal fade" id="modal_MODIFICAR_producto">
			  <div class="modal-dialog">
			    <div class="modal-content bs-callout bs-callout-info">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Modifica&oacute;n del Producto</h4>
			      </div>
			        <form action="<?php //echo base_url().index_page();?>" method="post" class="form-horizontal">
					      <div class="modal-body">
					      
								    <!-- Texto del nombre del producto-->
									<div class="control-group">
									  <label class="control-label" for="descripcion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Nomre del producto a crear</label>
									  <div class="controls">
									    <input id="mdescripcion" name="descripcion" type="text" data-toggle="tooltip" data-placement="left" title="Titulo del Producto" class="form-control">
									    <p class="help-block">nombre con qu se visualisara el producto.</p>
									  </div>
									</div>

								    <!-- CODIGo del nombre del producto-->
									<div class="control-group">
									  <label class="control-label" for="codigo"><span class="glyphicon glyphicon-qrcode	" aria-hidden="true"></span> CODIGO</label>
									  <div class="controls">
									    <input id="mcodigo" name="codigo" type="text" data-toggle="tooltip" data-placement="left" title="debe crear un codigo unico para este producto" class="form-control">
									    <p class="help-block">codigo unico para el producto.</p>
									  </div>
									</div>

								    <!-- Cantidad en el Inventario-->
									<div class="control-group">
									  <label class="control-label" for="cantidad"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> CANTIDAD en el Inventario</label>
									  <div class="controls">
									    <input id="mcantidad" name="cantidad" type="text" data-toggle="tooltip" data-placement="left" title="Cantidad  de este producto en el Inventario" class="form-control">
									    <p class="help-block">Si desea inicializar el inventario con una cantidad de este producto</p>
									  </div>
									</div>

									<!-- Seleccion de categoria -->
									<div class="control-group">
									  <label class="control-label" for="categoria">Seleccione la Categoria</label>
									  <div class="controls">
									    <select id="mcategoria" name="categoria" class="form-control">
									    <?php 	
									    		if($this->session->userdata('categorias')):
									    			$categorias=$this->session->userdata('categorias');
									    			for ($i=0; $i < count($categorias); $i++) { 
									    				echo "<option value=\"".$categorias[$i]['id']."\"><span class=\"badge\">".$categorias[$i]['nombre_categoria']."</span></option>";
									    			}
									    		endif;
									    ?>
									    </select>
									    <div class="txtSeleccionado"></div>
									  </div>
									</div>

									<div class="control-group">
							        <label class="control-label" for="compra">Precio de Compra</label>
							        <div class="input-group">
							          <div class="input-group-addon alert-info">Bs.</div>
							          <input type="text" class="form-control" name="compra" id="mcompra" placeholder="compra" data-toggle="tooltip" data-placement="top" title="Use (.) Punto como separador decimal. ejemplo 1480.20" >
							        </div>
							      </div>

									<div class="control-group">
							        <label class="control-label" for="venta">Precio de Venta</label>
							        <div class="input-group">
							          <div class="input-group-addon alert-success">Bs.</div>
							          <input type="text" class="form-control" name="venta" id="mventa" placeholder="venta" data-toggle="tooltip" data-placement="top" title="Use (.) Punto como separador decimal. ejemplo 1480.20" >
							        </div>
							      </div>


									<div class="control-group"><br>
									      <div class="checkbox alert alert-warning">
		                                                <label>
		                                                    <input type="checkbox" name="exento" value="1"> Exento de I.V.A.
		                                                </label>
		                                  </div>
		                            </div>  

					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cerrar</button>
					        <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Actualizar</button>
					      </div>
			        </form>
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

    <!-- FIN de Modal de MODIFICAR PRODUCTO -->    
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->


<script>
	/*Activamos los eventos de los titulos o herramienta de tip (tooltip)*/
	$(function () {  
		$('[data-toggle="tooltip"]').tooltip() 
    	$('#tabla').DataTable({

    		/*Defino las columnas alineadas a la derecha*/
			 "columnDefs": [
			    { 
			    	className: "dt-body-right", "targets": [ 4,5 ]

			     }
			  ],
			/*establesco que ahora el delimitador de miles es el punto y la coma delimitador decimal*/
			"language": {
            				"decimal": ",",
            				"thousands": "."
        				},


    		"ajax": "<?php echo base_url().index_page();?>/administrador/productos",
    		"columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button>Editar</button>"
        	} ]


		  					});	
    	var table = $('#tabla').DataTable();

    	    $('#tabla tbody').on( 'click', 'button', function () {
			        var data = table.row( $(this).parents('tr') ).data();
			        //alert( "codigo: "+data[0] +" / id es: "+ data[ 6 ] );
			        	$('#modal_MODIFICAR_producto').modal();
			         	$('#mdescripcion').val(data[ 1 ]);
			        	$('#mcodigo').val(data[ 0 ]);
			        	$('#mcantidad').val(data[ 3 ]);
			        	$('#mcompra').val(data[ 4 ]);
			        	$('#mventa').val(data[ 5 ]);
			        		//establesco la categoria que tenia
						    $( "#mcategoria").val(data[ 7 ]);
			        
			        $("#modal_MODIFICAR_producto").modal('show');
			    } );
    	
    	/* Hover de la tabla cuando se da click una celda*/
    	    $('#tabla tbody').on( 'click', 'tr', function () {
		        if ( $(this).hasClass('selected') ) {
		            $(this).removeClass('selected');
		        }
		        else {
		            table.$('tr.selected').removeClass('selected');
		            $(this).addClass('selected');
		        }
		    } );


    	$('td.sorting_1').css('background-color','#5cb85c');
    	$('td.sorting_1').css('color','#fff');
	});
</script>
</body>

</html>