
<!-- * * * * * * MODAL DE NUEVA FACTURA DE VENTA * * * * * * * * -->
<div id="modal_nueva_fac_venta"  class="modal fade">
				
			  <div class="modal-dialog">
			    <div class="modal-content bs-callout bs-callout-info">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title">Registro de Nueva Factura</h4>
			      </div>
					
					<!-- descripcion de razon social para buscar el cliente-->
					<div class="input-group input-group-lg">
					  <span class="input-group-addon" id="sizing-addon1">
					  	<span class="glyphicon glyphicon-search"></span>
					  </span>
					  <input type="text" id="txt_razon_fac_search" class="form-control" placeholder="razon social o nombre del cliente" aria-describedby="sizing-addon1">
					</div>

					<div class="row">
						<div class="col-lg-8">
							<input type="text" name="razon" value="" style="text-align: left; margin-top:7px;" class="form-control" placeholder="Razon Social" required="required">
						</div>
						<div class="col-lg-4">
							<input type="text" name="rif" value="" style="text-align: left; margin-top:7px;" class="form-control" placeholder="Rif:  J-12345678-9" required="required">
						</div>
					</div>
			       <?php

			        		$atributos_form=array('class="form"');
			        		echo form_open('administrador/reg_nueva_factura');
			        		$atributos=array(	'style'=>'text-align: left; margin-top:7px;',
										        'class' => 'form-control'
											);
			        		/*
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
			        		*/

			        		$atributos['name']='direccion';
			        		$atributos['rows']='3';
			        		$atributos['placeholder']='Indique la Dirección';
			        		$atributos['required']='required';
			        		echo form_textarea($atributos);



			        		$atributos['type']='submit';
			        		$atributos['value']='CREAR';
			        		$atributos['name']='btn-guardar-cliente';
			        		$atributos['class']='btn btn-lg btn-success';
			        		echo form_input($atributos);

			        		echo form_close();
			        ?>
			        
			  	</div>
			  </div>
</div>
<!-- * * * * * * MODAL DE NUEVA FACTURA DE VENTA * * * * * * * * -->
<script>
$("#txt_razon_fac_search").on('keyup',function(){
		var texto=this.value.trim();
		if(texto.length>0){
			console.log("cliente a buscar: "+texto);
		}
	}).keyup();
</script>