<div class="row">
	<div class="col-lg-9">
		<h3>Tabla de facturas de compras del mes en curso</h3>
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
                                    </tr>
                                </tbody>
        </table>

	</div>
	<div class="col-lg-3">
        <?php $this->load->view('menu_opciones/opciones_fac_compras'); ?>
	</div>
</div>