                            <div class="panel-body">
                                <div class="list-group">
		                            <a href="<?php echo base_url();?>contador/pagina/fac_compras" class="list-group-item <?php if($this->session->userdata('pagina')=='fac_compras'){ echo 'active';} ?>"><i class="fa fa-hand-o-right">  </i> Compras del Mes Actual</a>
                                    <a href="<?php echo base_url();?>contador/pagina/new_fac_compras" class="list-group-item <?php if($this->session->userdata('pagina')=='new_fac_compras'){ echo 'active';} ?>"><i class="fa fa-file-text">  </i> Cargar Factura de Compra</a>
                                    <a href="javascript:;" data-toggle="modal" data-target="#modal_consultar_mes" class="list-group-item"><i class="fa fa-question-circle">  </i> Consultar Mes Especifico</a>
		                            <a href="#" class="list-group-item"><i class="fa fa-plus-circle">  </i> Crear Nuevo Proveedor</a>
		                            <a href="#" class="list-group-item"><i class="fa fa-search">  </i> Consultar Proveedor Especifico</a>
		                            <a href="#" class="list-group-item"><i class="fa fa-copy">  </i> Generar Reporte</a>
		                        </div>
                            </div>

								