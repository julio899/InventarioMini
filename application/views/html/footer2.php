    <!-- jQuery -->
    <script src="<?php echo base_url();?>js/jquery.js"></script>

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
			        <form action="<?php echo base_url().index_page();?>/administrador/" method="post" class="form-horizontal">
					      <div class="modal-body">
					      
								    <!-- Texto del nombre del producto-->
									<div class="control-group">
									  <label class="control-label" for="textinput">Nomre del producto a crear</label>
									  <div class="controls">
									    <input id="textinput" name="textinput" type="text" data-toggle="tooltip" data-placement="left" title="Titulo del Producto" class="form-control">
									    <p class="help-block">nombre con qu se visualisara el producto.</p>
									  </div>
									</div>

								    <!-- CODIGo del nombre del producto-->
									<div class="control-group">
									  <label class="control-label" for="textinput">CODIGO</label>
									  <div class="controls">
									    <input id="textinput" name="textinput" type="text" data-toggle="tooltip" data-placement="left" title="debe crear un codigo unico para este producto" class="form-control">
									    <p class="help-block">codigo unico para el producto.</p>
									  </div>
									</div>

									<!-- Seleccion de categoria -->
									<div class="control-group">
									  <label class="control-label" for="selectbasic">Seleccione la Categoria</label>
									  <div class="controls">
									    <select id="selectbasic" name="selectbasic" class="form-control">
									      <option>sin categoria</option>
									    </select>
									  </div>
									</div>

									<div class="control-group">
							        <label class="control-label" for="exampleInputAmount">Precio de Compra</label>
							        <div class="input-group">
							          <div class="input-group-addon alert-info">Bs.</div>
							          <input type="text" class="form-control" id="exampleInputAmount" placeholder="compra" data-toggle="tooltip" data-placement="left" title="Use (.) Punto como separador decimal. ejemplo 1480.20" >
							        </div>
							      </div>

									<div class="control-group">
							        <label class="control-label" for="exampleInputAmount">Precio de Venta</label>
							        <div class="input-group">
							          <div class="input-group-addon alert-success">Bs.</div>
							          <input type="text" class="form-control" id="exampleInputAmount" placeholder="venta" data-toggle="tooltip" data-placement="left" title="Use (.) Punto como separador decimal. ejemplo 1480.20" >
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

<script>
	/*Activamos los eventos de los titulos o herramienta de tip (tooltip)*/
	$(function () {  $('[data-toggle="tooltip"]').tooltip() });
</script>
</body>

</html>