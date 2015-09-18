
    <!-- Morris Charts JavaScript -->
    <!-- <script src="<?php echo base_url();?>js/plugins/morris/raphael.min.js"></script> -->
    <!-- <script src="<?php echo base_url();?>js/plugins/morris/morris.min.js"></script> -->
    <!-- <script src="<?php echo base_url();?>js/plugins/morris/morris-data.js"></script> -->


	<!-- Inicio la carga de los Modals-->

	<?php if( $this->session->userdata['datos_usuario']['tipo']=='A'):  ?>
	<?php $this->load->view('modal/crear_categoria');?>
	<?php $this->load->view('modal/crear_producto');?>
	<?php $this->load->view('modal/modificar_producto');?>
	<?php $this->load->view('modal/crear_proveedor');?>
	<?php $this->load->view('modal/crear_cliente');?>
	<?php endif;?>

	<!-- En caso que sea un usuario de tipo contador cargo los modales necesarios -->
	<?php if( $this->session->userdata['datos_usuario']['tipo']=='C'):  ?>
	<?php $this->load->view('modal/crear_empresa');?>
	<?php $this->load->view('modal/crear_nueva_cuenta');?>
	<?php $this->load->view('modal/consultar_mes_especifico');?>
	<?php endif;?>

<script>

	/*Activamos los eventos de los titulos o herramienta de tip (tooltip)*/
	$(function () {

/*Activando los campos date con el datepicker*/
$.datepicker.setDefaults($.datepicker.regional["es"]);

$("#datepicker").datepicker({
showWeek: true,
firstDay: 1,
dateFormat: 'yy-mm-dd'
});


		$("#fecha_fact" ).datepicker();   
		$("#fecha_factura").datepicker();
		$('[data-toggle="tooltip"]').tooltip() 
    	$('#tabla').DataTable({

    		/*Defino las columnas alineadas a la derecha*/
			 "columnDefs": [
			    { 
			    	className: "dt-body-right", "targets": [ 4,5 ] 
			     }
			  ],
			/*establesco que ahora el delimitador de miles es el punto y la coma delimitador decimal*/
			"language": {
            				"decimal": ",",
            				"thousands": "."
        				},


    		"ajax": "<?php echo base_url().index_page();?>/administrador/productos",
    		"columnDefs": [ {
            "targets": -1,
            "data": null,
            "defaultContent": "<button>Editar</button>"
        	}

        	]


		  					});	
    	var table = $('#tabla').DataTable();

    	    $('#tabla tbody').on( 'click', 'button', function () {
			        var data = table.row( $(this).parents('tr') ).data();
			        //alert( "codigo: "+data[0] +" / id es: "+ data[ 6 ] );
			        	$('#modal_MODIFICAR_producto').modal();
			         	$('#mdescripcion').val(data[ 1 ]);
			        	$('#mcodigo').val(data[ 0 ]);
			        	$('#mcantidad').val(data[ 3 ]);
			        	var compra=data[ 4 ].replace('.', ''); var venta=data[ 5 ].replace('.', '');
			        	compra=compra.replace(',', '.'); venta=venta.replace(',', '.');
			        	$('#mcompra').val( compra );
			        	$('#mventa').val( venta );

			        		//establesco la categoria que tenia
						    $( "#mcategoria").val(data[ 7 ]);
						    
						    //si era exento lo marco
						    if(data[ 8 ]==1){ 
						    	$("#exento").attr('checked', true);
						    }
						    var valor=0; if($("#exento").is('check')){valor=1;}
						    $("#status").append( "<input id=\"temporal\" type=hidden name=\"exento\" value=\""+ valor +"\">" );

						    $("#exento").change(function(){
							 	if($("#exento").is(':checked')){valor=1;}else{valor=0;}

							 	console.log($("#exento").is(':checked'));
								$("#temporal").attr('value', valor);							 	
							 });
						    
						    //$("#exento").is(':checked');

    	    					/*{
							 		$("#status").append( "<input id=\"temporal\" type=hidden name=\"exento\" value=\"1\">" );
							 	}else{
							 		$("#temporal").attr( "value",'0' );
							 	
							 	}*/
							
							 /*$("#exento").change(function(){
							 	//alert($("#exento").is(':checked') );
							 	
							 });*/
	
						    $("#btn_actualizar").click(function(){
								//$("#exento").remove();
								if($("#exento").is(':checked')){valor=1;}else{valor=0;}
								$("#exento").attr('value', valor);	
								$("#temporal").attr('value', valor);		
								console.log("click en actualizar  status exento"+ $("#exento").is(':checked')+" / valor: "+valor);
						    });
						    	
	

						    var urlNueva=$("#form_actualizar_producto").attr('action') + "/"+data[ 6 ];
			        $("#form_actualizar_producto").attr('action',urlNueva);
			        $("#modal_MODIFICAR_producto").modal('show');
			    } );
    	
    	/* Hover de la tabla cuando se da click una celda*/
    	    $('#tabla tbody').on( 'click', 'tr', function () {
		        if ( $(this).hasClass('selected') ) {
		            $(this).removeClass('selected');
		        }
		        else {
		            table.$('tr.selected').removeClass('selected');
		            $(this).addClass('selected');
		        }
		    } );


    	$('td.sorting_1').css('background-color','#5cb85c');
    	$('td.sorting_1').css('color','#fff');


    	/*Mientras se escribe en Input del Cod de Proveedor*/
    	$("#proveedor_codigo").on('keyup', function(){
        	var value = $(this).val().length;
        	//$("p.proveedor_help").html(value);

					$.ajax({
					  method: "GET",
					  url: "<?php echo base_url().index_page();?>/administrador/proveedor_existe/"+$(this).val()
					})
					  .done(function( msg ) {
					    if(msg=="NULL\n"){
					    	if(value>0){

						    	console.log("codigo disponible");
						    	$("p.proveedor_help").html("codigo disponible");
						    	$("p.proveedor_help").css('color','blue');
					    		$("#btn_guardar_proveedor").attr("class", "btn btn-success");
						    
					    	}
					    	if(value==0){	//si no ha escrito ningun codigo desabilito el boton de guardar    	
					    					$("#btn_guardar_proveedor").attr("class", "btn btn-success disabled");
					    					$("p.proveedor_help").css('color','black');
					    					$("p.proveedor_help").html("Por favor Cree un codigo para este proveedor");
					    				}
					    }else{
					    	console.log("no esta disponible este codigo");

					    	$("p.proveedor_help").css('color','red');
					    	$("p.proveedor_help").html("Lo sentimos pero no esta disponible este codigo");
					    	$("#btn_guardar_proveedor").attr("class", "btn btn-success disabled");
					    }

					  });

        	console.log("Caracteres: "+value+" / Text: "+ $(this).val() );
    	}).keyup();


		// Evento Activando Modals seccion [ administrador/cargar_factura ]
    	$("#new_proveedor").click(function(){
    		$("#modal_nuevo_proveedor").modal('show');
    	});
    	

	});

</script>

                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-8">
                        <div class="alert alert-info ">
                            <i class="fa fa-info-circle"></i>  <strong>Like SB Admin?</strong> Try out <a href="http://startbootstrap.com/template-overviews/sb-admin-2" class="alert-link">SB Admin 2</a> for additional features!
                        </div>
                    </div>

                    <div class="col-lg-1"></div>
                </div>
</body>

</html>