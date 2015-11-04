<div class="row">
	<div class="col-lg-9">
        <div class="panel panel-green">
                        <div class="panel-heading">
                            Carga de una nueva factura de compra
                        </div>
                        <div class="panel-body">
                            <div class="row">

                                <div class="col-lg-12">
                                    <form role="form"  action="<?php echo base_url();?>contador/reg_fac_compra" method="post">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                
                                                    <div class="form-group input-group">
                                                        <input type="text" class="form-control" id="buscador_proveedor" placeholder="para buscar un proveedor cargado use este campo">
                                                        <span class="input-group-btn">
                                                            <button class="btn btn-info" type="button"><i class="fa fa-search"></i>
                                                            </button>
                                                        </span>
                                                    </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div id="resultado" class="btn-group-vertical" role="group"></div>
                                            </div>
                                        </div>

                                        <div class="forn-group">
                                            <label id="status-busqueda"></label>
                                        </div>

                                        <div class="form-group">
                                            <label>Razón Social</label>
                                            <input class="form-control" name="razon" id="razon" required>
                                            <p class="help-block">Describa el nombre del provedor</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Rif.</label>
                                            <input class="form-control" name="rif" id="rif" placeholder="ejemplo: J-12345678-9" type="text" required>
                                        </div>

                                        <div class="form-group" id="cod_new_proveedor">
                                            <label>Asigne un codigo para el nuevo proveedor</label>
                                            <input class="form-control" name="cod_new_proveedor" id="cod_proeedor" placeholder="ejemplo: 2050" type="text" required>
                                        
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Dirección</label>
                                            <textarea class="form-control" rows="3" name="direccion" id="direccion" required></textarea>
                                        </div>

                                        <hr>
                                        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                
                                                <div class="form-group input-group">
                                                    <span class="input-group-addon">Bs.</span>
                                                    <input class="form-control" id="monto" type="number" step="any" placeholder="ejemplo: 3420.50" name="monto" required>
                                                    <span class="input-group-addon">MONTO</span>
                                                </div>
                                            </div>

                                            <div class="col-lg-3">
                                                <p>Base: <label id="base" class="label label-primary"></label></p>
                                            </div>

                                            <div class="col-lg-3">
                                                <p><strong>I.V.A: </strong><label id="iva" class="label label-success"></label></p>
                                            </div>
                                        </div>

                                        <hr>

                                        
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Nro. de Factura</label>
                                                    <input name="nro_factura" class="form-control" placeholder="ejemplo: 0012514" required >
                                                </div>  
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <label>Nro. de Control</label>
                                                    <input name="nro_control" class="form-control" placeholder="ejemplo: 00-2031" required >
                                                </div>                                                
                                            </div>
                                            <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Tipo de cuenta a la que se le asignara esta factura</label>
                                                        <select name="tipo_cuenta" id="tipo_cuenta" class="form-control" required>
                                                            <option value="">Seleccione un Tipo de Cuenta --></option>
                                                             <?php   if (isset($cuentas)): 
                                                                    for ($i=0; $i < count($cuentas); $i++) { 
                                                                        echo '<option value="'.$cuentas[$i]['codigo'].'">[ '.$cuentas[$i]['codigo']." ] ". strtoupper($cuentas[$i]['nombre'] ).'</option>';
                                                                    }
                                                                endif; ?>
                                                        </select>
                                                    </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label>Descripción de esta factura</label>
                                            <input class="form-control" placeholder="ejemplo: Compra de Mercancia" name="descripcion" required>
                                        </div>


                                        <div class="form-group">
                                            <label for="datepicker">Fecha de la Factura</label>
                                            <input id="datepicker" name="fecha_fact" type="date" required >   
                                        </div>

                                        <div class="form-group">
                                            <label for="mes_afectado">Mes en que afecta la cuenta</label>
                                            <input id="mes_afectado" class="date-mes" name="mes_fact" required >   
                                        </div>

                                        <div class="form-group">                                     
                                                <div class="alert alert-info" role="alert">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                          
                                                                <p>Indique la cuenta de <strong>Desembolso</strong></p>
                                                                <select name="cuenta_desenbolso" id="cuenta_desenbolso" class="form-control">
                                                                    <option value="">Cuenta que Pago esta factura --></option>
                                                                    <?php 
                                                                                $cat_desembolso = $this->session->userdata['datos_usuario']['cuentas_desembolso'];
                                                                                foreach ($cat_desembolso as $key => $value) {
                                                                                    echo "<option value=\"".$value['id']."\"> ".$value['nombre']." </option>";
                                                                                }
                                                                     ?>
                                                                </select>
            
                                                        </div>

                                                        <div class="col-lg-6">
                                                                <p><strong>Descripción de Asiento:</strong></p>
                                                                <textarea name="descripcion_a" id="descripcion_a" cols="10" class="form-control"></textarea>  
                                                        </div>

                                                    </div>
                                                </div>
                                        </div>



                                        <!--js para date del mes -->
                                        <script>
                                            $(function() {
                                            $('.date-mes').datepicker( {
                                                changeMonth: true,
                                                changeYear: true,
                                                showButtonPanel: false,
                                                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                                monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
                                                dateFormat: 'mm-yy',
                                                onClose: function(dateText, inst) { 
                                                    var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
                                                    var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
                                                    $(this).datepicker('setDate', new Date(year, month, 1));
                                                    
                                                }

                                            });
                                        
                                        });
                                            // # Ocultando los dias y cambiando colore a los textos de los select 
                                            $( "#mes_afectado" ).focus(function() {
                                                    $('table.ui-datepicker-calendar').css('display','none');
                                                    $('select.ui-datepicker-month').css('color','black');
                                                    $('select.ui-datepicker-year').css('color','black');
                                            });
                                                                                   
                                             </script>
                                        <style>
                                         .ui-datepicker-calendar {
                                         /*   display: none;*/
                                        }

                                        </style>

                                        <button type="submit" class="btn btn-primary">Cargar</button>
                                        <button type="reset" class="btn btn-default limpiar">Limpiar</button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
        <!--Cargamos el Js de Autocompletado -->
        <?php $this->load->view('js/buscador_proveedor'); ?>
	</div>
	<div class="col-lg-3">
        <?php $this->load->view('menu_opciones/opciones_fac_compras'); ?>
	</div>
</div>