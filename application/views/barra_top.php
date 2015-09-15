    <?php $session=$this->session->userdata('datos_usuario');?>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if($this->session->userdata['datos_usuario']['tipo']=='A'):?>
                    <a class="navbar-brand" href="<?php echo base_url().index_page();?>administrador">Panel de Administraci&oacute;n</a>
                <?php endif;?>

                <?php if($this->session->userdata['datos_usuario']['tipo']=='C'):?>
                    <a class="navbar-brand" href="<?php echo base_url().index_page();?>contador">Panel de Contador</a>
                <?php endif;?>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <?php if($this->session->userdata['datos_usuario']['tipo']=='C' && $this->session->userdata('empresa_seleccionada')   ):?>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="Cambiar de Empresa" aria-expanded="false"><i class="fa fa-codepen"></i> Cambiar de Empresa <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                               
                                    <?php if(isset($empresas))
                                            {
                                                for ($i=0; $i <count($empresas) ; $i++) { 
                                                    echo "<li><a href=\"".base_url()."contador/seleccionar_empresa/".$empresas[$i]['codigo']."\">[ COD: ". $empresas[$i]['codigo'] ." ] <br>". strtoupper($empresas[$i]['razon']) ."</a></li>";
                                                }
                                            } ?>
                                
                            </ul>
                    </li>
                <?php endif; ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $session['nombre_completo']?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Configuraci&oacute;n</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url().index_page();?>/principal/cerrar_session" class="btn-danger"><i class="fa fa-fw fa-power-off"></i> Desconectarse</a>
                        </li>
                    </ul>
                </li>

            </ul>