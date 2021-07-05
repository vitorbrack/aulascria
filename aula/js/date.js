var dataDate = new Date();

/* Pode-se criar um objeto Date() de diversas formas.
new Date() - data de hoje
new Date(year, month, day, hours, minutes, seconds, milliseconds)
new Date(milliseconds)
new Date(date string)
*/

//Exibe a mensagem da promoção
var mensagem = document.getElementById('mensagem');
mensagem.innerHTML = ofertaExpira();

//O objeto date armazena o valor da data como milisegundos
//86 400 000 milisegundos são 24hs

function ofertaExpira(){
    var diaDaSemana, dia, data, mes, ano, nomeDia, nomeMes;

    diaDaSemana = new Date(dataDate.getTime() + 1000 * 60 * 60 * 24);
   
    nomeDia = ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];

    nomeMes = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho',
    'Agosto','Setembro','Outubro','Novembro','Dezembro'];

    dia = nomeDia[diaDaSemana.getDay()];

    data = diaDaSemana.getDate();

    mes = nomeMes[diaDaSemana.getMonth()];

    ano = diaDaSemana.getFullYear();

    msgTermina = 'Oferta termina ';
    msgTermina += dia + ' <br>(' + data + ' de ' + mes + ' de ' + ano + ')';

    return msgTermina;
}

