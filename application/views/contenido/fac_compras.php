<div class="row">
	<div class="col-lg-9">
    <?php   if ( $this->session->userdata( 'fac_mes_actual' )  ): 
$a[1] = "Enero"; 
$a[2] = "Febrero"; 
$a[3] = "Marzo"; 
$a[4] = "Abril"; 
$a[5] = "Mayo"; 
$a[6] = "Junio"; 
$a[7] = "Julio"; 
$a[8] = "Agosto";
$a[9] = "Septiembre";
$a[10] = "Octubre";
$a[11] = "Noviembre";
$a[12] = "Diciembre";
     ?>
		<h3>Tabla de facturas de compras del mes en curso <?php echo "[".date('m')." - ".$a[ date('m') ]."]";?></h3>
    <?php endif; ?>
		<table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Concepto</th>
                                        <th>Razon Social</th>
                                        <th>Tipo de Cuenta</th>
                                        <th>Fecha</th>
                                        <th>Monto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <!--
                                    <tr>
                                        <td>compra de mercancia</td>
                                        <td>Imprenta la Tinta</td>
                                        <td>Inversiones</td>
                                        <td>01-09-2015</td>
                                        <td>$321.33</td>
                                    </tr>
                                    <tr>
                                        <td>compra de impresora</td>
                                        <td>K-TUX, C.A</td>
                                        <td>Gastos de Papeleria</td>
                                        <td>07-09-2015</td>
                                        <td>$234.12</td>
                                    </tr> -->
                                    <?php   
                                            if ( $this->session->userdata( 'fac_mes_actual' )  ): 
                                                $mes_actual=$this->session->userdata( 'fac_mes_actual' );
                                                    foreach ($mes_actual as $key => $value) {
                                                        echo "
                                                                <tr>
                                                                    <td>".strtolower($value['descripcion'])."</td>
                                                                    <td>".strtolower($value['proveedor'])."</td>
                                                                    <td>".strtoupper($value['cuenta'])."</td>
                                                                    <td>". $value['fecha']."</td>
                                                                    <td>".number_format($value['monto'],2,',','.')."</td>
                                                                </tr>
                                                        ";
                                                    }
                                            endif; ?>
                                </tbody>
        </table>
	</div>
	<div class="col-lg-3">
        <?php $this->load->view('menu_opciones/opciones_fac_compras'); ?>
	</div>
</div>