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
    
    ingresos = [20,232,34,12,12];
    gastos = [73,48,594,231,122];
    ahorro = [34,12];
    fechas = ['Ingresos', 'Gastos', 'Ahorros'];
    /*
    * Creando na tabla grafica chars.js
    */
    var LineChart = {
       labels: fechas,
       datasets: [{
       fillColor: "rgba(151,249,190,0.5)",
       strokeColor: "rgba(255,255,255,1)",
       pointColor: "rgba(220,220,220,1)",
       pointStrokeColor: "#fff",
       data: ingresos
       }, {
       fillColor: "rgba(252,147,65,0.5)",
       strokeColor: "rgba(255,255,255,1)",
       pointColor: "rgba(173,173,173,1)",
       pointStrokeColor: "#fff",
       data: gastos
      }, {
       fillColor: "rgba(252,147,65,0.5)",
       strokeColor: "rgba(255,255,255,1)",
       pointColor: "rgba(173,173,173,1)",
       pointStrokeColor: "#fff",
       data: ahorro
      }]
    };


    var myLineChart = new Chart( 
      document.getElementById("canvas").getContext("2d")).Line(LineChart,{ scaleFontSize : 16,
      scaleFontColor : "#ffa45e"
    });

    /*
    *  fin de Creando na tabla grafica chars.js
    */  
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
  
  $('#crearGasto').click(function() {
    var dataString = $('#ingresos').serialize();
    alert('Datos serializados: ' + dataString);
    $.ajax({
      type: "post",
      url: "controller/walletController.php",
      data: dataString,
      beforeSend: function () {
        $("#resultado").html("Procesando, espere por favor...");
      },
      success: function(data) {
         alert("datos entregados"+data);
      },
      done: function(data) {
         alert("datos entregados"+ data);
        console.log(data);
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

