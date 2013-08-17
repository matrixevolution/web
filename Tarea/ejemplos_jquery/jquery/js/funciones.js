$(document).ready(function(){
    //Aquí tu codigo
    var xyz=$(".clase1").html();
    var d1=$("#dv1").html();
    //alert(d1);
    //alert(xyz);

    
    $(".buttonBslideup").click(function() {
      $(".firstparagraph").slideDown("slow");
	  $("#campo").attr("value","Bye");
    });

    $(".buttonBslidedown").click(function() {
      $(".secondparagraph").slideUp("slow");
	  $("#campo").attr("value","Hola Fernando");
    });

    //$(".dv2").html("algo");
	$(".dv2").append(' <b>Mundo</b>');
    $(".dv2").append(" GOnso");
    /*var c1=$("#campo").attr("value");
    alert(c1);*/
});

/*$(document).ready(function(){
  //codigo
  });*/