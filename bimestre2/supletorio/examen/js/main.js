$(document).ready(function() {

  $( "form#registro" ).validate({
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
          maxlength: 100,
           remote:{
                url: "rpc/comprobar_email.php",
                type: "post",
                data: {
                  email:function(){
                    return $("#email").val();
                  },
                }
              }
          

        },
        contrasena: {
          minlength: 5,
          maxlength: 15,
          required: true
        },
        vcontrasena: {
          minlength: 5,
          maxlength: 15,
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

    if( $( "form#registro" ).valid() ) {   
       var $btn = $(this).button('loading');
       var noticias = $("form#contacto #noticias").is(":checked") ? 1 : 0;
      $.ajax({
        url: 'rpc/procesar.php',
        type: 'post',
        // dataType: 'json',
       

        data: {"nombres": $("form#registro #nombres").val(),
              "apellidos": $("form#registro #apellidos").val(),
              "email": $("form#registro #email").val(),
              "contrasena": $("form#registro #contrasena").val(),
              "vcontrasena": $("form#registro #vcontrasena").val()},

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

    $('form#registro')[0].reset();  
    
  });


$( "form#login" ).validate({
     rules: {
        
        email: {
          email: true,
          required: true,
          minlength: 9,
          maxlength: 20
         

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


 $("#btn-login").on("click",function(e){
   e.preventDefault();
     if($("form#login").valid()){
             $.ajax({
                 url: 'rpc/login.php',
                 type: 'post',

               data: {
                    email: $("form#login #email").val(),
                     contrasena:$("form#login #contrasena").val()
                 }

             })

                 .done(function(msg) {
                     if(msg == "false")
                     {
                       $('#mensaje').addClass('alert-danger');
                       alert("Email y/o Contraseña incorrectas, Intenta Nuevamente o Registrate !");
                       window.location.href='index.php';
                     }
                       

                     else if(msg == "true")
                     {
                       alert(" Login Correcto !");
                      window.location.href='matriculacion.php';                     
                       //$('#mensaje').html(msg);
                       //console.log("success");
                       //$('#login').trigger("reset");
                     }
                    
                 })


                 .fail(function(jqXHR, textStatus, errorThrown) {
                     console.log("fail: " + textStatus + " " + errorThrown);
                 })


                 .always(function() {
                     console.log("complete");
                 });
         }
        
         $('form#login')[0].reset();  
     });


$('#nivel').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_niveles.php',
    type: 'POST',
    data: {nivel: $('#nivel').val()},
  })
  .done(function(msg) {
    var valor = $("#nivel option:selected").html();
    if(valor=="Primero") valor="Primer";
    if(valor!="Seleccione...")
    {
      $('#titulo').html('<label>Lista de materias diponibles del '+valor+' nivel: </label>');
    }
    else
    {
      $('#titulo').html('<label>Seleccione un nivel </label>');
    }
    

    $('#materia2').html(msg);

    $('#materia2 input:checkbox').each(function(index, el) {
        var id_materia = $(this).val();

        $.ajax({
          url: 'rpc/verificar_materia.php',
          type: 'POST',
          data: {"id_materia": id_materia},
        })
        .done(function(msg) {
          console.log("success");
          if(msg=="true")
          {
            $('#materia2 input:checkbox[value='+id_materia+']').attr('checked', true);
          }
          
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
        
      });

    console.log("success");
    location.reload();
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});

$("#btn-guardar").click(function(event) {
    if($('#nivel').val()=="")
    {
      alert("Seleccione las materias.");
    }
    else
    {
      $('#materia input:checkbox').each(function(index, el){
        var dataString;
        if($(this).is(':checked'))
        {
           dataString = 'id_materia='+$(this).attr('value')+'&nivel='+$('#nivel').val()+'&estado=si'; 
        }
        else
        {
          dataString = 'id_materia='+$(this).attr('value')+'&nivel='+$('#nivel').val()+'&estado=no';
        }

        $.ajax({
          url: 'rpc/registrar_materia.php',
          type: 'POST',
          data: dataString,
        })
        .done(function(msg) {
          alert(msg);
          console.log("success");
          location.reload();
        })
        .fail(function() {
          console.log("error");
        })
        .always(function() {
          console.log("complete");
        });
        
      });

    }
    
  });


});
