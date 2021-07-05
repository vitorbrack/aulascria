var subtotal = (13 + 1) * 5;
var frete = 0.5 * (13 + 1);
var total = subtotal + frete;
var cifrao = 'R$ '

var subResultado = document.getElementById('subtotalvalor');
subResultado.textContent += cifrao + subtotal;

var freteResultado = document.getElementById('fretevalor');
freteResultado.textContent += cifrao + frete;

var totalResultado = document.getElementById('totalvalor');
totalResultado.textContent += cifrao + total;


