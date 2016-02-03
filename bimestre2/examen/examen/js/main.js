$(document).ready(function() {

  $( "form#usuario" ).validate({
     rules: {
        nombres: {
          required: true,
          minlength: 2,
          lettersonly: true
        },

        apellidos: {
          required: true,
          minlength: 2,
          lettersonly: true
        },
        email: {
          email: true,
          required: true,
          minlength: 9,
          maxlength: 20,
          remote: {
                    url: 'rpc/ver_email.php',
                    type: 'POST',
                    delay: 2000    
                }

        },
        contrasena: {
          minlength: 5,
          maxlength: 8,
          required: true
        },
        vcontrasena: {
          minlength: 5,
          maxlength: 8,
          required: "#contrasena", 
          equalTo: "#contrasena"
        },
    },
    messages: {
    nombres: {
      required: "Ingresa tu Nombre.",
      lettersonly:" Letras solamente por favor",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },

    apellidos: {
      required: "Ingresa tu Apellido.",
      lettersonly:" Letras solamente por favor",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },

    email: {
      email:"Ingrese una direccion de Email Valida",
      required: "Email Obligatorio.",
      minlength: $.validator.format("Al menos {0} caracteres requeridos"),
      maxlength: $.validator.format("Maximo {0} caracteres requeridos")
    },

    contrasena: {
      required: "Contraseña Obligatoria.",
      maxlength:"no mas de 8 caracteres",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },

    vcontrasena: {
      required: "Campo de Verificacion Obligatorio.",
      equalTo: 'No coincide con tu contraseña, por favor, verifica.',
      maxlength:"no mas de 8 caracteres",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    }


    
  }
  });


  $("#btn-enviar").on('click', function(e){
    e.preventDefault();

    if( $( "form#usuario" ).valid() ) {   
       var $btn = $(this).button('loading');
       var noticias = $("form#contacto #noticias").is(":checked") ? 1 : 0;
      $.ajax({
        url: 'rpc/procesar.php',
        type: 'post',
        // dataType: 'json',
       

        data: {"nombres": $("form#usuario #nombres").val(),
              "apellidos": $("form#usuario #apellidos").val(),
              "email": $("form#usuario #email").val(),
              "contrasena": $("form#usuario #contrasena").val(),
              "vcontrasena": $("form#usuario #vcontrasena").val()},

        success: function(respuesta)
        {
          alert(respuesta);
        }
             
      })
      .done(function(msg) {
        console.log("success");
        $("#success").html(msg)
        $('#contact-form').modal('hide')
      })
      .fail(function(jqXHR, textStatus, errorThrown) {
        console.log("fail: " + textStatus + " " + errorThrown);
        $("#error").html(textStatus)
      })
      .always(function() {
        console.log("complete");
        $btn.button('reset');
      });
    }
    
  });


$( "form#login" ).validate({
     rules: {
        
        email: {
          email: true,
          required: true,
          minlength: 9,
          maxlength: 20,
          remote: {
                    url: 'rpc/ver_email.php',
                    type: 'POST',
                    delay: 2000    
                }

        },
        contrasena: {
          minlength: 5,
          maxlength: 8,
          required: true
        },
    },
    messages: {

    email: {
      email:"Ingrese una direccion de Email Valida",
      required: "Email Obligatorio.",
      minlength: $.validator.format("Al menos {0} caracteres requeridos"),
      maxlength: $.validator.format("Maximo {0} caracteres requeridos")
    },

    contrasena: {
      required: "Contraseña Obligatoria.",
      maxlength:"no mas de 8 caracteres",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },

    
  }
  });



$("#btn-cancelar").on('click',function()
{
  window.location.href='index.php';
});


$('btn').on('click', function(event) {
    event.preventDefault();

    if ($('form#login').valid()) 
    {
      $.ajax({
        url: 'rpc/ver_usuario.php',
        type: 'POST',
        data: {email:$(' form#login #email').val(),
               contrasenia:$('form#login #contrasenia').val(),
             },
      })
      .done(function(msg)
      {
        if (msg==true) 

          location.href="matriculacion.php";
          
          else
              location.href="registro.php";

          
          console.log("success"); 
        
      })
      .fail(function() {
        console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
      
    };
  });


$('#txtprovincia').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_cantones.php',
    type: 'POST',
    data: {provincia: $('#txtprovincia').val()},
  })
  .done(function(msg) {
    $('#txtcanton').html(msg);
    $('#txtparroquia').html('<option value="">Seleccione...</option>');
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});
});
