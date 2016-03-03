<script>
	$("input#monto").keyup(function () {
		var total=$("input#monto").val();
		var base=(total / 1.12);
		var iva=base*0.12;
		$("label#base").html( base.toFixed(2) );
		$("label#iva").html( iva.toFixed(2) );
	});
</script>