$('#crearAhorro').click( function() {
  var dataString = $('#ahorros').serializeArray();
  $.ajax({
    type: "POST",
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
