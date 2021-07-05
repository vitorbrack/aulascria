var hotel = {
    nome: 'Galante Hotel',
    quartos: 40,
    reservados: 25,
    verificaDisponiveis: function(){
        return this.quartos - this.reservados;
    },
    reservaQuarto: function(){
        this.reservados--;
    }
};

var tituloPagina = document.getElementById('nome-hotel');
tituloPagina.textContent = hotel.nome;

var quantQuartos = document.getElementById('quartos-hotel');
quantQuartos.textContent = hotel.quartos;

var reservas = document.getElementById('reservados-hotel');
reservas.textContent = hotel.reservados;

function reservaQuartos(){
    hotel.reservaQuarto();
    reservas.textContent = hotel.reservados;
    if(hotel.reservados <= 0){
        reservas.textContent = 'Não há quartos disponíveis.'
    }
}