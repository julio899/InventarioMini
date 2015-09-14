<?php $session=$this->session->userdata('datos_usuario');?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <?php $this->load->view('barra_top');?>
            <?php $this->load->view('sidebar');?>

        </nav>

        <div id="page-wrapper">
        <?php if( $this->session->userdata('empresa_seleccionada')  ){ $this->load->view('contenido/panel_contador_empresa'); } ?>

        <?php if(!$this->session->userdata('empresa_seleccionada')): ?>
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Escritorio de Trabajo <small>Seleccion de Empresa</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Panel Principal
                            </li>
                        </ol>   
                        
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
                                    ?>




                </div><!-- fin de col-lg-12-->


                </div>
                <!-- /.row -->

                
                    <div class="row">
                        <div class="col-lg-3">
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                   Panel de Selecci&oacute;n
                                </div>
                                <div class="panel-body">
                                    
                                    <div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        Seleccione una Empresa para empezar a trabajar
                                        <span class="caret"></span>
                                      </button>
                                      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

                                    <?php if(isset($empresas))
                                            {
                                                for ($i=0; $i <count($empresas) ; $i++) { 
                                                    echo "<li><a href=\"".base_url()."contador/seleccionar_empresa/".$empresas[$i]['codigo']."\">[ COD: ". $empresas[$i]['codigo'] ." ] ". strtoupper($empresas[$i]['razon']) ."</a></li>";
                                                }
                                            } ?>
                                      </ul>

                                    </div> 
                                </div>
                                <div class="panel-footer">
                                   <a href="#" id="btn-crear-empresa" data-toggle="modal" data-target="#modal_nueva_empresa" class="btn btn-success">Crear Una Empresa</a> 
                                </div>
                            </div>
                        </div>
                        <!-- /.col-lg-4 -->
                        <div class="col-lg-3">
                        </div>
                        <!-- /.col-lg-4 -->
                    </div>

            </div>
            <!-- /.container-fluid -->
        <?php endif; ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


