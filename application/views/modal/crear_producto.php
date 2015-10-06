
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * -->
    <!-- Modal de CREAR PRODUCTO -->
		    <div class="modal fade" id="modal_nuevo_producto">
			  <div class="modal-dialog">
			    <div class="modal-content bs-callout bs-callout-info">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Creaci&oacute;n de un NUEVO Producto</h4>
			      </div>
			        <form action="<?php echo base_url();?>administrador/reg_nuevo_producto" method="post" class="form-horizontal">
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
