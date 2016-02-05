$(document).ready(function() {
  $('#crear').click(function() {
    var dataString = $('#usaurio').serialize();
    alert('Datos serializados: ' + dataString);
    console.log($('#usaurio').serialize());
    $.ajax({
      type: "JSON",
      url: "account.php",
      data: dataString,
      success: function(data) {}
    });
  });

  $('#crearIngresos').click(function() {
    var dataString = $('#ingresos').serialize();
    alert('Datos serializados: ' + dataString);
    $.ajax({
      type: "JSON",
      url: "account.php",
      data: dataString,
      success: function(data) {}
    });
  });
  
  $('#crearGasto').click(function() {
    var dataString = $('#ingresos').serialize();
    alert('Datos serializados: ' + dataString);
    $.ajax({
      type: "post",
      url: "account.php",
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
    var dataString = $('#ahorros').serialize();
    alert('Datos serializados: ' + dataString);
    $.ajax({
      type: "post",
      url: "account.php",
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
  
});

