$(document).ready(inicio)
function inicio(){
	$(".botoncompra").click(anade)
	$("#carrito").load("php/poncarrito.php")
}

function anade(){

	var idnumero = $(this).val();
	var cantidad = $("#num"+idnumero).val();

	//alert(.$_SESSION['producto'].);

	if (cantidad>0) {

	$("#carrito").load("php/poncarrito.php?p="+$(this).val()+"&cant="+cantidad);	
	
	}

	else {
	alert('Selecciona una cantidad del producto');

	}
}

