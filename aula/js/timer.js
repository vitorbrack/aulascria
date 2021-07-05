var contador = new Date(dataDate.getTime() + (1000 * 60 * 60 * 24));

var x = setInterval(function(){

    var hoje = new Date().getTime();

    var dataIntervalo = contador - hoje;

    var diaCount = Math.floor(dataIntervalo / (1000 * 60 * 60 * 24));
    var horaCount = Math.floor((dataIntervalo % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutosCount = Math.floor((dataIntervalo % (1000 * 60 * 60)) / (1000 * 60));
    var segundosCount = Math.floor((dataIntervalo % (1000 * 60)) / 1000);

    document.getElementById('contador').innerHTML= horaCount + ':' + minutosCount + ':' + segundosCount;


},1000);