<?php $session=$this->session->userdata('datos_usuario');?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <?php $this->load->view('barra_top');?>
            <?php $this->load->view('sidebar');?>

        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
            	

						<div class="row">
							<div class="col-lg-3">
								<!-- barra de las opciones -->
								<?php $this->load->view('menu_opciones/opciones_fac_compras'); ?>
								<!-- tan solo con llamar esa linea  llamo a mi archivo de opciones que esta en la carpeta menu_opciones -->
							</div>

							<div class="col-lg-9">
								<!-- hice un espacio mas ancho para el contenido -->
									<div class="panel panel-primary">
									  <div class="panel-heading">Modulo de Factura de Ventas</div>
									  <div class="panel-body">
									    <!-- Inicio del contenido de mi formulario -->
												<!-- Campo para buscar los clientes -->
												 <div class="form-group">
												    <label class="sr-only" for="exampleInputAmount">Cliente a Buscar</label>
												    <div class="input-group">
												      <input type="text" class="form-control" id="exampleInputAmount" placeholder="Ingrese Razon Social">
												      <div class="input-group-addon">
												      	<!-- Icono de Lupa para buscar el cliente-->
												      	<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
												      </div>
												    </div>
												  </div>

									    <!-- FINAL del contenido de mi formulario -->
									  </div>
									</div>
							</div>
						</div>	

            </div>

         </div>

</div>
