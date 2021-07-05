//Algumas propriedades e métodos do Browser Object Model

document.write('Altura da Página: ' + window.innerHeight); //Altura da página

document.write('<br> Largura da Página: ' + window.innerWidth); //Largura da página

// Distância de rolagem Horizontal e Vertical

document.write('<br> Distância Horizontal: ' + window.pageYOffset);

document.write('<br> Distância Vertical: ' + window.pageXOffset);

//Coordenadas X e Y de distância da janela do navegador em relação ao canto esquerdo do monitor
document.write('<br> Coordenada X: ' + window.screenX);

document.write('<br> Coordenada Y: ' + window.screenY);

//URL atual do documento/página

document.write('<br> URL atual: ' + window.location);

//Volta a página anterior
document.write('<br><a href="#" onclick="window.history.back()">Voltar</a>');

//Altura e Largura da Tela
document.write('<br> Resolução da tela: ' + window.screen.width + ' X ' + window.screen.height);

//Alguns Métodos

//Alert
window.alert('Alerta Importante!');

//Abrir uma URL ou caminho
window.open('http://google.com', '_black');

//Imprimir
window.print();