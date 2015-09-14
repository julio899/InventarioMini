
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">

            <?php if($this->session->userdata['datos_usuario']['tipo']=='A'):?>
                <!-- opciones en caso de ser Administrador -->
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url().index_page();?>administrador"><i class="fa fa-fw fa-dashboard"></i> Escritorio</a>
                    </li>


                    <li>
                        <a href="#" data-toggle="modal" data-target="#modal_nuevo_cliente"><i class="fa fa-fw fa-user"></i> Registrar Cliente</a>
                    </li>


                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Inventario <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#" data-toggle="modal" data-target="#modal_nuevo_proveedor"><span class="fa fa-truck" aria-hidden="true"></span> Crear Proveedor</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url().index_page();?>/administrador/cargar_factura"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span> Cargar Facturas de Compras</a>
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
                        <a href="<?php echo index_page();?>"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
                <!-- Fin de Opciones del Administrador-->
            <?php endif;?>

            <?php if($this->session->userdata['datos_usuario']['tipo']=='C'):?>
                <!-- opciones en caso de ser Contador -->
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url().index_page();?>contador"><i class="fa fa-fw fa-dashboard"></i> Escritorio</a>
                    </li>
                    <?php if($this->session->userdata('empresa_seleccionada')): ?>
                    <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Cargar Facturas<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="#">Gastos</a>
                                </li>
                                <li>
                                    <a href="#">Ventas</a>
                                </li>
                                <li>
                                    <a href="#">Compras <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level collapse">
                                        <li>
                                            <a href="#">Mercancia General</a>
                                        </li>
                                        <li>
                                            <a href="#">Mercancia Detallada</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->

                        </li>
                        <li class="">
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level collapse">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                    <?php endif; ?>


                </ul>
                <!-- Fin de Opciones del Contador-->


                
            <?php endif;?>
            </div>
            <!-- /.navbar-collapse -->