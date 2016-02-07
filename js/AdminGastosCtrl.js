  $('#crearGasto').click(function() {
    var dataString = $('#gastos').serialize();
    alert('Datos serializados: ' + dataString);
    $.ajax({
      type: "POST",
      url: "class/AdminGastosClass.php",
      data: dataString,
      beforeSend: function () {
        $("#resultado").html("Procesando, espere por favor...");
      },
      success: function(data) {
         alert("datos entregados"+data);
      },
      done: function(data) {
        alert("datos entregados"+ data);
        alert(msg);
      },
    });
  });

   $('.update').click( function(id) {
    $.ajax({
        type: "POST",
        url: "class/EditarGastoController.php",
        data: {operacion: 'update', id_usuario: id}
    }).done(function (html) {
        $('#contenido').html(html);
    }).false(function () {
        alert('Error al cargar modulo');
    });
  });

 $('.delete').click( function(id) {
      $.ajax({
          type: "POST",
          url: "class/AdminGastosClass.php",
          data: {id_usuario: id, operacion: "delete"}
      }).done(function (msg) {

          alert(msg);
          $(this).parent().parent().remove();
      }).fail(function () {
          alert("Error enviando los datos. Intente nuevamente");
      });
  });