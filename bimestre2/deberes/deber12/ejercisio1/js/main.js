$(document).ready(function(){

	//OCULTA TODO EL DOCUMENTO HTML

		 $("#btn").on( "click", function() {
		 	$('#table').hide(); 
			
		 });

	// OCULTA SOLO EL BOTON

		 $("#btn").on( "click", function() {	 
	         $('#btn').toggle();
	      });

	// OCULTA EL ENCABEZADO Y EL PRIMER PARRAFO

		  $("#btn").click(function () {
            $('.intro').toggle();
         });

	//SELECCIONA EL 1ER ELEMENTO DE LA PRIMERA LISTA Y LO OCULTA

/*
		    $("#li1").click(function () {
            $('.tortilla').toggle();
          });*/


	//ocultar los primeros elementos de las dos listas.

		    $("#li1").click(function () {
            $('.tortilla').toggle();
            $('.gaseosa').toggle();
         });

		     $("#li4").click(function () {
            $('.tortilla').toggle();
            $('.gaseosa').toggle();
         });

	});