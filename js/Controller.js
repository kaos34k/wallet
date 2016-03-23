$( document ).ready( function() {
    $(".CrUsuario").click( function(){
      $("#usaurio").slideToggle();
    }); 
     
    $(".CrIngreso").click(function(){
      $("#ingresos").slideToggle();
    });

    $(".CrGasto").click(function(){
      $("#gastos").slideToggle();
      $(".gastos-table").slideToggle();
    });

    $(".CrAhorro").click(function(){
      $("#ahorro").slideToggle();
    });            
});