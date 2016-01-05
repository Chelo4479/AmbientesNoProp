
$(document).ready(function() {

//FILA PARES EN ROJO Y FILAS INPARES EN VERDE

	$("tr:even").addClass("even");
     $("tr:odd").addClass("odd");

//MOSTRAR MENSAJE EVENTO HOVER

    $("#table1").hover(function()
    {
      $("#MostrarTexto").html("<b style='color:red;'>HAS PASADO SOBRE LA TABLA</b>");
    }, function()
		{
	        $("#MostrarTexto").html("");
	    });
//METODOS FOCUS Y BLUR PARA CAMBAIR COLOR DE CAUDROS DE TEXTO
		$("input").focus(function(){
        $(this).css("background-color", "#0040FF");
        
   		});

   		 $("input").blur(function(){
        $(this).css("background-color", "#ffffff");
    });
});