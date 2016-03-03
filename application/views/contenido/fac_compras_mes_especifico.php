
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
                                        <th>Base</th>
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
                                                                    <td>".strtoupper($value['proveedor'])."</td>
                                                                    <td class=\"R\">".$value['nro_fac']."</td>
                                                                    <td>".strtoupper($value['cuenta'])."</td>
                                                                    <td>". $fecha."</td>
                                                                    <td class=\"R\">". number_format( round( ($monto_temp /1.12) ,2) ,2,',','.')."</td>
                                                                    <td class=\"R\">". number_format( round( ( ($monto_temp /1.12) *12)/100 ,2) ,2,',','.')."</td>
                                                                    <td class=\"R\">".number_format( $monto_temp,2,',','.')."</td>
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
<div class="row">
        <table class="table table-hover">
            <theader>
                <tr>
                <th>FAC.</th>
                <th>DESCRIPCION</th>
                <th>DEBE</th>
                <th>HABER</th>
                <th>FECHA</th>
                </tr>
            </theader>
            <tbody>
                <?php 
                    if ( $this->session->userdata( 'fac_mes_especifico' )  ):
                                                foreach ($mes_actual as $key => $value) {
                                                        $fecha=date("d-m-Y",strtotime($value['fecha'])); 
                                                        $monto_temp=round( $value['monto'],2 );
                                                        $base_temp=round(( $monto_temp/1.12),2);
                                                        $iva_temp=round( (($monto_temp /1.12) *12)/100 ,2);
                                                        $base+=$base_temp;
                                                        $iva+= $iva_temp;
                                                        $total+=$monto_temp;  //number_format( numero ,2,',','.') 
                                                        //". number_format( round( ($monto_temp /1.12) ,2) ,2,',','.')."
                                                        //". number_format( round( ( ($monto_temp /1.12) *12)/100 ,2) ,2,',','.')."
                                                        //".number_format( $monto_temp,2,',','.')."
                                                        echo "
                                                                <tr>
                                                                    <td class=\"L\">".$value['nro_fac']."</td>
                                                                    <td>
                                                                     <div class=\"row\">
                                                                        <div class=\"col-lg-4\">".strtoupper($value['descripcion'])."</div>
                                                                        <div class=\"col-lg-8\">".strtoupper($value['cuenta'])." [ ".$value['tipo_cuenta']." ]</div>
                                                                    </div>
                                                                    
                                                                     <div class=\"row\">
                                                                        <div class=\"col-lg-4\"></div>
                                                                        <div class=\"col-lg-8\">".strtoupper("credito iva")."[ ]</div>
                                                                     </div>


                                                                     <div class=\"row\">
                                                                        <div class=\"col-lg-6\"></div>
                                                                        <div class=\"col-lg-4\">".strtoupper($value['xcuenta'])." [ ".$value['contra_cuenta']." ]</div>
                                                                        <div class=\"col-lg-1\"></div>
                                                                     </div>

                                                                                                                                                        
                                                                    </td>


                                                                    <td class=\"R alert-success\">
                                                                        <div class=\"R\">
                                                                         "; if($value['aumenta']=='D'){echo number_format($base_temp,2,',','.');}else{echo "<br>";} echo "   
                                                                        </div>

                                                                        <div class=\"R\">
                                                                            ".number_format($iva_temp,2,',','.')."
                                                                        </div>

                                                                        <div class=\"R\">
                                                                         "; if($value['xdisminuye']=='D'){echo number_format($base_temp,2,',','.');} echo "   
                                                                        </div>
                                                                    </td>

                                                                    <td class=\"R alert-warning\">
                                                                    
                                                                        <div class=\"R\">
                                                                         "; if($value['aumenta']!='D'){echo number_format($base_temp,2,',','.');}else{echo "<br>";} echo "   
                                                                        </div>



                                                                        <div class=\"R\">
                                                                              <br>
                                                                        </div>

                                                                        <div class=\"R\">
                                                                         "; if($value['xdisminuye']!='D'){echo number_format( ( $base_temp+$iva_temp ),2,',','.');} echo "   
                                                                        </div>
                                                                    </td>
                                                                    <td>". $fecha."</td>
                                                                </tr>
                                                        ";
                                                    }
                    endif; 
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
            </tbody>
        </table>
</div>