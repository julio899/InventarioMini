
<div class="row">
	<div class="col-lg-9">
                    <?php   if ( $this->session->userdata( 'fac_mes_especifico' )  ): 
                            $a[1] = "Enero"; 
                            $a['01'] = "Enero"; 
                            $a[2] = "Febrero";  
                            $a['02'] = "Febrero"; 
                            $a[3] = "Marzo"; 
                            $a['03'] = "Marzo"; 
                            $a[4] = "Abril"; 
                            $a['04'] = "Abril"; 
                            $a[5] = "Mayo"; 
                            $a['05'] = "Mayo"; 
                            $a[6] = "Junio"; 
                            $a['06'] = "Junio"; 
                            $a[7] = "Julio"; 
                            $a['07'] = "Julio"; 
                            $a[8] = "Agosto";
                            $a['08'] = "Agosto";
                            $a[9] = "Septiembre";
                            $a['09'] = "Septiembre";
                            $a[10] = "Octubre";
                            $a[10] = "Octubre";
                            $a[11] = "Noviembre";
                            $a[11] = "Noviembre";
                            $a[12] = "Diciembre";
                            $a[12] = "Diciembre";
                     ?>
		              <h3>Tabla de facturas de compras del mes <?php echo "[".$this->session->userdata('mes_especifico')['mes'] ." - ".$a[ $this->session->userdata('mes_especifico')['mes'] ]."]";?></h3>
                    <?php endif; ?>
		<table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Razon Social</th>
                                        <th>FACT. #</th>
                                        <th>Tipo de Cuenta</th>
                                        <th>Fecha de FACT</th>
                                        <th>base</th>
                                        <th>IVA</th>
                                        <th>Monto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php   $iva=0; $base=0; $total=0;
                                            if ( $this->session->userdata( 'fac_mes_especifico' )  ): 
                                                $mes_actual=$this->session->userdata( 'fac_mes_especifico' );
                                                    foreach ($mes_actual as $key => $value) {
                                                        $fecha=date("d-m-Y",strtotime($value['fecha'])); 
                                                        $monto_temp=round( $value['monto'],2 );
                                                        $base_temp=round(( $monto_temp/1.12),2);
                                                        $iva_temp=round( (($monto_temp /1.12) *12)/100 ,2);
                                                        $base+=$base_temp;
                                                        $iva+= $iva_temp;
                                                        $total+=$monto_temp;  //number_format( numero ,2,',','.') 
                                                        echo "
                                                                <tr>
                                                                    <td>".strtolower($value['proveedor'])."</td>
                                                                    <td>".$value['nro_fac']."</td>
                                                                    <td>".strtoupper($value['cuenta'])."</td>
                                                                    <td>". $fecha."</td>
                                                                    <td>". number_format( round( ($monto_temp /1.12) ,2) ,2,',','.')."</td>
                                                                    <td>". number_format( round( ( ($monto_temp /1.12) *12)/100 ,2) ,2,',','.')."</td>
                                                                    <td>".number_format( $monto_temp,2,',','.')."</td>
                                                                </tr>
                                                        ";
                                                    }
                                            endif; ?>

                                                                <tr>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td class="td-fuente label-primary" ><?php echo number_format( $base,2,',','.');?></td>
                                                                    <td class="td-fuente label-success"><?php echo number_format( $iva,2,',','.');?></td>
                                                                    <td class="td-fuente label-danger"><?php echo number_format( $total,2,',','.');?></td>
                                                                </tr>
                                </tbody>
        </table>
	</div>
	<div class="col-lg-3">
        <?php $this->load->view('menu_opciones/opciones_fac_compras'); ?>
	</div>
</div>