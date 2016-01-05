$(document).ready(function() {
  var contenedor = $('#contenedor_1').html();
  var i = 2;
  $("#btn").on('click', function(e){
    e.preventDefault();

    $('.con').css('height', '30px');
    
    $('#contenedor_' + (i -1)).after('<tr id="contenedor_' + i + '" class="contenedor"> ' + contenedor + '</tr>');
    $('#contenedor_' + i + ' label').text('Interes ' + i);
    $('#contenedor_' + i + ' input').attr({
      id: 'interes' + i,
      name: 'interes' + i
    });
  
    i++;
  });

  $('#btn_eliminar').on('click', function(e) {
    e.preventDefault();
    if(i > 2){
      $('#contenedor_' + (i -1)).remove();
      i--;
    } else {
      alert("No se puede eliminar el ultimo elemento");
    }
  });

});
  $('#submit').click(function()
  {
          if($('#interes1').val()=="")
          {
            alert("Introduce el interes");
            return false;
          }
          else
          {
            var interes1 = $('#interes1').val();
          }
          
          jQuery.post("guardar.php", {
            interes:interes1,
            
          }, function(data, textStatus){
            if(data == 1){
              $('#res').html("Datos insertados.");
              $('#res').css('color','green');
            }
            else{
              $('#res').html("Ha ocurrido un error.");
              $('#res').css('color','red');
            }
          });






});