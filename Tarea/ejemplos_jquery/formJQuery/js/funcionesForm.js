$(document).ready(function() {
  $("#enviar").click(function(){
    var dv = $("#enviados");
    //alert("hi");
    var datos=$("form").serialize();
    alert(datos);
    $("#enviados").load("registraDatos.php?",datos);
    dv.show('slow');
  });

  $("#limpiar").click(function(){
    var dv = $("#enviados");
    dv.hide('slow');
  });

  $("#postear").click(function(){
    var dv = $("#enviados");
    var datos=$("form").serialize();
    //$.post("pagina.php",{numero:v},llegadaDatos);
    //alert(datos);
    $.post('registraDatos1.php',datos, function(data) {
       $("#enviados").html(data);
     });
   dv.show("slow");
  });

$("#ajaxEar").click(function(){
  //alert("HOla");
  var datos=$("form").serialize();
  $.ajax({
    type: "POST",
    data: datos,//"nom="+nombre+"&ape="+apellido,
    url: "registraDatos1.php",
    success: function(respuesta){
      alert (respuesta);
      $("#enviados").html(respuesta); 
    }
  });
});
});