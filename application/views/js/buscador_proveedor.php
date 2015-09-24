<script>
$("button.limpiar").click(function(){
	$("input").removeAttr( "disabled" );
	$("textarea").removeAttr( "disabled" );
});


$('#buscador_proveedor').on('keyup', function(){
	var valor = $('#buscador_proveedor').val();
	//console.log(valor);
	if(valor.trim().length!=0){
		// sino esta vacia la cadena

	$.getJSON( "<?php echo base_url();?>contador/get_proveedor/"+valor, function( data ) {
		  var items = [];

		  	$("#resultado").html("");
		  	//$("#resultado").html("<ul class=\"lista\"></ul>");
		  $.each( data, function( key, val ) {
		    //items.push( "<li id='" + key + "'>" + val + "</li>" );
		    //console.log(key +" / id "+val.id+" / razon: "+val.razon+" / rif: "+val.rif);
		    var rif=val.rif;
		  	//$("ul.lista").append("<li id='" + val.id + "'>" + val.razon + "</li>");
		  	$("#resultado").append("<button type=\"button\" class=\"btn btn-default proveedor\" rif=\""+rif+"\" id=\""+val.id+"\" razon=\""+val.razon+"\" direccion=\""+val.direccion+"\" >" + val.razon + "</button>")
		  

		  });
		 
		 $( "button.proveedor" ).click(function() {
		  $(this).toggleClass( "seleccionado" );

			var rif=$(this).attr('rif'); 
			var id=$(this).attr('id');
			var razon=$(this).attr('razon');
			var direccion=$(this).attr('direccion');
			$("#razon").val(razon);
			$("#rif").val(rif);
			$("#direccion").val(direccion);
			$("#razon").attr('disabled','disabled');
			$("#rif").attr('disabled','disabled');
			$("#direccion").attr('disabled','disabled');
			console.log("rif:"+rif+"\nid:"+id+"\nrazon:"+razon);	
			$("#resultado").html("");
		});
		

		});


	}else{

		  	$("#resultado").html("");
	}

 });


</script>