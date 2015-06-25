<?php $session=$this->session->userdata('datos_usuario');?>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <?php $this->load->view('barra_top');?>
            <?php $this->load->view('sidebar');?>

        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Escritorio <small> Carga de Facturas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Cargas de Facturas
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
                                    
                                    <!-- Carga de facturas -->
                                    <div class="row">
                                        <div class="col-lg-2"></div>
                                        <div class="col-lg-6">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    Detalle de la factura a cargar
                                                </div>
                                                <div class="panel-body">
                                                    <p>Porfavor complete todos los campos para procesar su carga.</p>
                                                    

                                                    <div class="form-group">
                                                        <label>Indique la Fecha</label>
                                                        <input id="fecha_fact" type="date" data-provide="datepicker" placeholder="AAAA-mm-dd">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Proveedor</label>
                                                        <select class="form-control">
                                                            <?php
                                                                if (isset($proveedores)) {
                                                                    
                                                                    foreach ($proveedores as $key => $value) {
                                                                        echo "<option value=\"".$proveedores[$key]['id']."\">COD: ".$proveedores[$key]['codigo']." - ".$proveedores[$key]['razon']."</option>";
                                                                    }
                                                                }
                                                            ?>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Razon o Motivo de la factura</label>
                                                        <input class="form-control" placeholder="coloque una brebe descripcion">
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Nro.# de la factura</label>
                                                        <input class="form-control" placeholder="Ejemlo: 0070">
                                                    </div>

                                                    <div class="form-group input-group">
                                                        <input class="form-control" id="monto" name="monto" type="text" placeholder="Monto Total">
                                                        <span class="input-group-addon">.00</span>
                                                    </div>

                                                    <duv class="form-group">
                                                        <button type="button" class="btn btn-primary btn-lg btn-block">Cargar</button>
                                                    </duv>

                                                </div>
                                                <div class="panel-footer">
                                                    Verifique los datos Antes de cargar la factura.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <i class="fa fa-bell fa-fw"></i> Opciones
                                                </div>
                                                <!-- /.panel-heading -->
                                                <div class="panel-body">
                                                    <div class="list-group">
                                                        <a href="#" class="list-group-item">
                                                            <i class="fa fa-upload fa-fw"></i> Nuevo proveedor
                                                            <span class="pull-right text-muted small"><em>Registrar Uno Nuevo</em>
                                                            </span>
                                                        </a>
                                                        <a href="#" class="list-group-item">
                                                            <i class="fa fa-tasks fa-fw"></i> opcion x
                                                            <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <!-- /.list-group -->
                                                    <a href="#" class="btn btn-default btn-block">Ver Mas</a>
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                        </div>                                        
                                    </div>
                                    <!-- FIN de Carga de facturas -->

                    </div><!-- fin de col-lg-12-->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


