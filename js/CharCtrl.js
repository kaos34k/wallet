$( document ).ready( function() {
    /*
    * Creando na tabla grafica chars.js
    */
    ingresos = [20,232,34,12,12];
    gastos = [73,48,594,231,122];
    ahorro = [34,12];
    fechas = ['Ingresos', 'Gastos', 'Ahorros'];
    
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
