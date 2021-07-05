
//String

var saudacao = 'Lar doce lar';

document.write('Tamanho da String: ' + saudacao.length);

document.write('<br><br> Caixa Alta: ' + saudacao.toUpperCase() );

document.write('<br><br> Caixa Baixa: ' + saudacao.toLowerCase() );

document.write('<br><br> Letra na posição 5: ' + saudacao.charAt(5) );

document.write('<br><br> Índice da primeira letra "r": ' + saudacao.indexOf('r') );

document.write('<br><br> Índice da última letra "r": ' + saudacao.lastIndexOf('r') );

document.write('<br><br> Um pedaço da string: ' + saudacao.substring(4,8) );

document.write('<br><br> Divide a string em um array separado pelo caracter especificado: ' + saudacao.split(' ') );

document.write('<br><br> Remove os espaços em branco no início e no final da string: ' + saudacao.trim() );

document.write('<br><br> Troca um ou mais caracteres por outros: ' + saudacao.replace('doce', 'azedo') );

//Numbers

var numero = 4.3;
var expoente = 100000000;

document.write('<br><br>Verifica se não é um número: ' + isNaN(numero));

document.write('<br><br>Arredonda com a quantidade de casas decimais depois da vírgula: ' + numero.toFixed(3));

document.write('<br><br>Arredonda com a quantidade de casas totais: ' + numero.toPrecision(4));

document.write('<br><br>Retorna uma notação exponencial: ' + expoente.toExponential(1));

//Math

document.write('<br><br>Retorna PI: ' + Math.PI);

document.write('<br><br>Arredonda o número: ' + Math.round(numero));

document.write('<br><br>Arredonda o número para cima: ' + Math.ceil(numero));

document.write('<br><br>Arredonda o número para baixo: ' + Math.floor(numero));

document.write('<br><br>Raiz Quadrada de 9: ' + Math.sqrt(9));

document.write('<br><br>Gera um número aleatório: ' + Math.random());

document.write('<br><br>Seu número da sorte é: ' + Math.floor(Math.random() * 11));



