$(document).ready(function() {

  $( "form#contacto" ).validate({
     rules: {
        nombre: {
          required: true,
          minlength: 2,
          lettersonly: true
        },
        email: {
          email: true,
          required: true,
          minlength: 9,
          maxlength: 20,
        },
        telefono: {
          minlength: 9,
          maxlength: 13,
          digits: true,
          required: true
        },
        direccion: {
          
          required: true
        },
        usuario: {
          minlength: 4,
          maxlength: 10,
          required: true,
          remote: {
                    url: 'rpc/comprobar.php',
                    type: 'POST'
                    
                }
        },
        password: {
          minlength: 8,
          maxlength: 15,
          required: true
        },
        vpassword: {
          minlength: 8,
          maxlength: 15,
          required: "#password", 
          equalTo: "#password"
        },
    },
    messages: {
    nombre: {
      required: "Ingresa tu Nombre.",
      lettersonly:" Letras solamente por favor",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },

    email: {
      email:"Ingrese una direccion de Email Valida",
      required: "Email Obligatorio.",
      minlength: $.validator.format("Al menos {0} caracteres requeridos"),
      maxlength: $.validator.format("Maximo {0} caracteres requeridos")
    },

    telefono: {
      required: "Teléfono Obligatorio.",
      digits: "Solo Digitos",
      maxlength:"no mas de 13 Digitos",
      minlength: $.validator.format("Al menos {0} digitos requeridos")

    },

    direccion: {
      required: "Este Campo no es Obligatorio.",
    },

    usuario: {
      required: "Usuario Obligatorio.",
      remote:"El usuario ya existe",
      minlength: $.validator.format("Al menos {0} caracteres o mas")
      
    },

    password: {
      required: "Contraseña Obligatoria.",
      maxlength:"no mas de 15 caracteres",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    },

    vpassword: {
      required: "Campo de Verificacion Obligatorio.",
      equalTo: 'No coincide con tu correo, por favor, verifica.',
      maxlength:"no mas de 15 caracteres",
      minlength: $.validator.format("Al menos {0} caracteres requeridos")
    }


    
  }
  });



  $("#btn-enviar").on('click', function(e){
    e.preventDefault();

    if( $( "form#contacto" ).valid() ) {   
       var $btn = $(this).button('loading');
      var noticias = $("form#contacto #noticias").is(":checked") ? 1 : 0;
      $.ajax({
        url: 'rpc/procesar.php',
        type: 'post',
        // dataType: 'json',
       

        data: {"nombre": $("form#contacto #nombre").val(),
              "email": $("form#contacto #email").val(),
              "telefono": $("form#contacto #telefono").val(),
              "direccion": $("form#contacto #direccion").val(),
              "usuario": $("form#contacto #usuario").val(),
              "password": $("form#contacto #password").val(),
              "vpassword": $("form#contacto #vpassword").val()},

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


$('#txtcanton').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_parroquias.php',
    type: 'POST',
    data: {canton: $('#txtcanton').val()},
  })
  .done(function(msg) {
    $('#txtparroquia').html(msg);
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});


  $("#contact-form").on("hide.bs.modal", function(){
    $('#contacto')[0].reset();
  })
});