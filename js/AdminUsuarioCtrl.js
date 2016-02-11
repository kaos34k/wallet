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