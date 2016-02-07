$( document ).ready( function() {
    $(".CrUsuario").click( function(){
      $("#usaurio").slideToggle();
    });
    $(".CrIngreso").click(function(){
      $("#ingresos").slideToggle();
    });
    $(".CrGasto").click(function(){
      $("#gastos").slideToggle();
    });
    $(".CrAhorro").click(function(){
      $("#ahorro").slideToggle();
    });
});

  $( '#crear' ).click( function() {
    var dataString = $( '#usaurio' ).serialize();
    $.ajax({
      type: "POST",
      url: "controller/walletController.php",
      data: dataString,
      beforeSend: function () {
        $(".resultado").html("Procesando, espere por favor...");
      },
      success: function(data) {
        $(".resultado").html(data);
      },
      done: function(data) {
        $(".resultado").html(data);
      },
    });
  });

  $( '#crearIngresos' ).click( function() {
    var dataString = $( '#ingresos' ).serialize();
    alert( 'Datos serializados: ' + dataString);
    $.ajax({
      type: "JSON",
      url: "controller/walletController.php",
      data: dataString,
        beforeSend: function () {
          $(".resultado").html("Procesando, espere por favor...");
        },
        success: function( data ) {

        },
    });
  });
  
    $('#crearAhorro').click(function() {
      var dataString = $('#ahorros').serializeArray();

      $.ajax({
        type: "JSON",
        url: "controller/walletController.php",
        data: dataString,
        beforeSend: function () {
          $(".resultado").html("Procesando, espere por favor...");
        },
        success: function(data) {
           alert("datos entregados"+data);
            $(".resultado").html(data);
        },
        done: function(data) {
            alert("datos entregados"+ data);
            $(".resultado").html(data);
          console.log(data);
        },
      });
    });

