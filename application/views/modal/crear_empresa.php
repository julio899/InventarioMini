
    <!-- Modal de CREAR EMPRESA -->
		    <div class="modal fade" id="modal_nueva_empresa">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Creaci&oacute;n de una Empresa</h4>
			      </div>
					<?php

			        		$atributos_form=array('class'=>"form" ,'style'=>"padding:10px;");
			        		echo form_open('contador/reg_nueva_empresa',$atributos_form);
			        		$atributos=array(	'style'=>'text-align: left; margin-top:7px;',
										        'class' => 'form-control'
											);

			        		$atributos['name']='codigo';
			        		$atributos['type']='text';
			        		$atributos['placeholder']='Cree un Codigo ejemplo: 001';
			        		$atributos['required']='required';
			        		echo form_input($atributos);


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
			        		$atributos['value']='REGISTRAR';
			        		$atributos['name']='btn-registrar-empresa';
			        		$atributos['class']='btn btn-lg btn-primary';
			        		echo form_input($atributos);

			        		echo form_close();
			        ?>
			        
				<!--
			        <form action="<?php echo base_url().index_page();?>/contador/reg_nueva_empresa" method="post">
					      <div class="modal-body">
					        <p>Razón Social de la Empresa a crear</p>
					        <input type="text" class="form-control" name="razon" id="razon">
					        <p>RIF:</p>
					        <input type="text" class="form-control" name="rif" id="rif">
					        <p>Dirección:</p>
					        <textarea class="form-control" name="direccion" id="direccion" cols="30" rows="5"></textarea>
					      
					      </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> cancelar</button>
					        <button type="submit" class="btn btn-primary" ><span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span> Registrar</button>
					      </div>
			        </form> -->
			    </div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

    <!-- FIN de Modal de CREAR EMPRESA -->