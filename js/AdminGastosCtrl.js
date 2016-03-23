  $(".refress").click(function () {
    $("#myModal").load();
    $(".refress").load();
  });

  $('#crearGasto').click( function() {
    var dataString = $('#gastos').serialize();

    $.ajax({
      type: "POST",
      url: "controller/walletController.php",
      data: dataString,
      beforeSend: function () {
      },
      success: function() { 
      },
      done: function() {
      },
    });
  });

  $('.cargar').click( function(event){
    event.preventDefault();
    var consulta = $('#id-gasto-edit').val();
        console.log( consulta );
        $.ajax({
        type: "POST",
        url: "controller/walletController.php",
        data: "id_gasto="+consulta,
        dataType: "html",
        beforeSend: function(){
              //imagen de carga
              //$("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
              console.log("cargando infomación");
        },
        error: function(){
              alert("error petición ajax");
        },
        success: function(data){                                                    
              $("#resultado").empty();
              $("#resultado").append(data);
              console.log( $("#resultado") );                                          
        }
    });  
  });

   $('.update').click( function(id) {
    alert(id);
    $.ajax({
        type: "POST",
        url: "class/AdminGastosClass.php",
        data: {operacion: 'update', id_usuario: id}
    }).done(function (html) {
        $('#contenido').html(html);
    }).fail(function () {
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