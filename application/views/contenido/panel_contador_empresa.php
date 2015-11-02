<div class="container-fluid">
	<div class="row">
		 <div class="col-lg-12">
		 	<h1 class="page-header"><?php echo strtoupper($this->session->userdata('empresa_seleccionada')['razon']); ?> </h1>

                                    <?php
                                    /*
                                        *- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -*
                                        * Verifico si hay algun mensaje de error o notificacion que mostrar *
                                        * - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - *
                                    */
                                        if ($this->session->flashdata('ok')) {
                                            echo "<div class=\"alert alert-success\" role=\"alert\">
                                                  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                                                  <span class=\"sr-only\">Error:</span>".$this->session->flashdata('ok')."
                                                </div>";
                                        }// # Fin de Alerta success ok

                                        if ($this->session->flashdata('error')) {
                                            echo "<div class=\"alert alert-danger\" role=\"alert\">
                                                  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                                                  <span class=\"sr-only\">Error:</span>".$this->session->flashdata('error')."
                                                </div>";
                                        }// # Fin de Alerta Error
                                    ?>         </div>
	</div>

    <?php   #cargamos la pagina correspondiente
            if($this->session->userdata('pagina')):
                $pagina=$this->session->userdata('pagina'); 
                switch ($pagina) {
                       case 'fac_compras':
                           $this->load->view('contenido/fac_compras');
                           break;
                       case 'fac_compras_mes_especifico':
                            $this->load->view('contenido/fac_compras_mes_especifico');
                            break;
                       case 'new_fac_compras':
                           $this->load->view('contenido/new_fac_compras');
                           break;
                       default:
                           # code...
                           break;
                   }   
            endif; ?>
	

    <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>New Comments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">124</div>
                                    <div>New Orders!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
    </div>
          

   
</div>
	