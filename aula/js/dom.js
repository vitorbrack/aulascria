//Escreve texto
document.write('document.write que escreve um texto! <br>');

//Título da Página
document.write('<br>Título da Página: <strong>' + document.title + '</strong><br>');

//Data da última modificação
document.write('<br>Última Modificação: <strong>' + document.lastModified + '</strong><br>');

//Data da última modificação
document.write('<br>URL: <strong>' + document.URL + '</strong><br>');

//Data da última modificação
document.write('<br>Domínio: <strong>' + document.domain + '</strong><br>');


//Pegando um elemento pelo ID
var elementoId = document.getElementById('elemento01');
elementoId.textContent = 'Texto Elemento 01';

//Pegando um elemento pela CLASSE
var elementoId2 = document.querySelector('.elemento02');
elementoId2.textContent = 'Texto Elemento 02';