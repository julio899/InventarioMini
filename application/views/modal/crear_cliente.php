
<!-- * * * * * * MODAL DE NUEVO CLIENTE * * * * * * * * -->
			<div id="modal_nuevo_cliente" class="modal fade">
				
			  <div class="modal-dialog">
			    <div class="modal-content bs-callout bs-callout-info">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Registro de Nuevo Cliente</h4>
			      </div>

			        <?php

			        		$atributos_form=array('class="form"');
			        		echo form_open('administrador/reg_nuevo_cliente');
			        		$atributos=array(	'style'=>'text-align: left; margin-top:7px;',
										        'class' => 'form-control'
											);

			        		$atributos['name']='razon';
			        		$atributos['type']='text';
			        		$atributos['placeholder']='Razon Social';
			        		$atributos['required']='required';
			        		echo form_input($atributos);


			        		$atributos['name']='rif';
			        		$atributos['type']='text';
			        		$atributos['placeholder']='Rif:  J-12345678-9';
			        		$atributos['required']='required';
			        		echo form_input($atributos);

			        		$atributos['name']='direccion';
			        		$atributos['rows']='3';
			        		$atributos['placeholder']='Indique la Dirección';
			        		$atributos['required']='required';
			        		echo form_textarea($atributos);



			        		$atributos['type']='submit';
			        		$atributos['value']='GUARDAR';
			        		$atributos['name']='btn-guardar-cliente';
			        		$atributos['class']='btn btn-lg btn-primary';
			        		echo form_input($atributos);

			        		echo form_close();
			        ?>
			        
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div>
<!-- * * * FIN DE MODAL DE NUEVO CLIENTE * * * * * * * * -->
