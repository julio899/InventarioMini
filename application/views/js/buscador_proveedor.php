<script>
$('#buscador_proveedor').on('keyup', function(){
	var valor = $('#buscador_proveedor').val();
	console.log(valor);
	if(valor.trim().length!=0){
		// sino esta vacia la cadena

	$.getJSON( "<?php echo base_url();?>contador/get_proveedor/"+valor, function( data ) {
		  var items = [];
		  $.each( data, function( key, val ) {
		    //items.push( "<li id='" + key + "'>" + val + "</li>" );
		    console.log(key +" / id "+val.id+" / razon: "+val.razon);
		  
		  });
		 
		});
	}

 });
</script>