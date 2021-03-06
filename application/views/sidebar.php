
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

            <?php if($this->session->userdata['datos_usuario']['tipo']=='A'):?>
                <!-- opciones en caso de ser Administrador -->
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url();?>administrador"><i class="fa fa-fw fa-dashboard"></i> Escritorio</a>
                    </li>


                    <li>
                        <a href="#" data-toggle="modal" data-target="#modal_nuevo_cliente"><i class="fa fa-fw fa-user"></i> Registrar Cliente</a>
                    </li>


                    <li>
                        <a href="#" data-toggle="modal" data-target="#modal_nueva_fac_venta"><i class="fa fa-fw fa-edit"></i> Factura de Venta</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Inventario <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal_nuevo_proveedor"><span class="fa fa-truck" aria-hidden="true"></span> Crear Proveedor</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>administrador/cargar_factura"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> Cargar Facturas de Compras</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal_nueva_categoria"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Crear Categoria</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal_nuevo_producto"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Crear Producto</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
                <!-- Fin de Opciones del Administrador-->
            <?php endif;?>

            <?php if($this->session->userdata['datos_usuario']['tipo']=='C'):?>
                <!-- opciones en caso de ser Contador -->
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url();?>contador"><i class="fa fa-fw fa-dashboard"></i> Escritorio</a>
                    </li>
                    
                    <?php if($this->session->userdata('empresa_seleccionada')): ?>
                    <li>
                        <a href="javascritp:;" data-toggle="modal" data-target="#modal_nueva_cuenta">Crear una Cuenta</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> CARGAR FACTURAS <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                        <!-- Para referenciar a un modal data-toggle="modal" data-target="#id_del_modal" -->
                            <li>
                                <a href="<?php echo base_url();?>contador/pagina/fac_compras" ><span class="fa fa-truck" aria-hidden="true"></span> FACT. COMPRAS</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>administrador/cargar_factura"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> FACT. VENTAS</a>
                            </li>
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal_nueva_categoria"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> GASTOS</a>
                            </li>
                        </ul>
                    </li>

                    <?php endif; ?>


                </ul>
                <!-- Fin de Opciones del Contador-->


                
            <?php endif;?>
            </div>
            <!-- /.navbar-collapse -->