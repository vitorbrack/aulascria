
//De acordo com a suite escolhida o hospede já tem marcados as refeições

var suiteEscolhida = [document.forms[0].elements[0], document.forms[0].elements[1], 
document.forms[0].elements[2]];

for (var i=[0]; i < suiteEscolhida.length; i++){

suiteEscolhida[i].addEventListener('change', function(){
    var almoco = document.forms[0].elements[11]
    var janta = document.forms[0].elements[12]
    

    almoco.checked = false;
    janta.checked = false;

    if(suiteEscolhida[0].checked){
        almoco.checked = true;
        janta.checked = true;
    }

    if(suiteEscolhida[1].checked){
        almoco.checked = true;
    }
    
    
})
}

//Nome Completo

var nomeCompleto = document.getElementById('nome');

function validaNome(){
    var expNome = /^([^0-9]){3,50}$/g;
    var nomeValido = expNome.exec(nomeCompleto.value);
    var msgNome = '';

    if(!nomeValido){
        msgNome = 'Digite somente letras. E o nome completo!';
    }

    nomeCompleto.setCustomValidity(msgNome);

}

//E-mail

var emailCompleto = document.getElementById('email');

emailCompleto.addEventListener('blur',function(){
    var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z.]){3,6}$/g;
    var emailValido = expEmail.test(emailCompleto.value);
    var msgEmail = '';

    if(!emailValido){
        msgEmail = 'Digite um e-mail válido.';
    }

    emailCompleto.setCustomValidity(msgEmail);
});

//Tratando do CPF

var cpfCompleto = document.getElementById('cpf');

cpf.addEventListener('blur', function(){
    var expCpf = /(\d{3})(\d{3})(\d{3})(\d{2})/g;
    var cpfValido = expCpf.exec(cpfCompleto.value);
    var msgCpf = '';

    if(!cpfValido){
        msgCpf = 'Digite apenas números. Sem pontos ou traços';
    }

    var cpfComPontos = cpfCompleto.value.replace(expCpf,
        function( valorRegex, argumento1, argumento2, argumento3, argumento4 ) {
           return argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4;
   })
   
   cpfCompleto.setCustomValidity(msgCpf);
   cpf.value = cpfComPontos; 
   
})

//Data de Nascimento - Uma outra forma de declarar eventos, utilizando Arrow Functions

var dataNascimento = document.querySelector('#nascimento');

dataNascimento.addEventListener('blur', (evento) =>{
    validaNascimento(evento.target);
})

function validaNascimento(input){
    var dataRecebida = new Date(input.value);
    var msgNascimento = '';

    if(!verificaMaior18(dataRecebida)){
        msgNascimento = 'Você precisa ser maior de 18 anos';
    }

    input.setCustomValidity(msgNascimento);
}

function verificaMaior18(data){
    var dataHoje = new Date();
    var dataMaior18 = new Date(data.getFullYear() + 18, data.getMonth(), data.getDay());

    return dataMaior18 <= dataHoje;
}

//Telefone

var telefone = document.querySelector('#tel');

telefone.addEventListener('blur',(evento)=>{
    verificaTelefone(evento.target);
})

var expTel = /(^\(?[0]?[1-9]{2}\)?)[.-\s]?([9]?[\s]?[1-9]\d{3})[.-\s]?(\d{4})$/g;

function verificaTelefone(elemento){
    var telValido = expTel.exec(elemento.value);
    var msgTel = '';

    if(!telValido){
        msgTel = 'Insira um número de telefone válido com DDD e o 9';
    }

    elemento.setCustomValidity(msgTel);
    elemento.value = unificaTel(elemento.value);
}

function unificaTel(numero){
    var telNum = numero.replace(/[().-\s]/g, ''); //limpa
    var telFormatado = telNum.replace(expTel,
        function(valorTel,ddd,prefixo,numero){
            var numeroFinal = '('+ddd+') '+prefixo+'-'+numero;
            return numeroFinal;
        })
    return telFormatado;
}

//Senha

var senha = document.querySelector('#senha');

senha.addEventListener('blur', (eventoLegal) =>{
    verificaSenha(eventoLegal.target);
})

function verificaSenha(input) {
    var expSenha = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*[!@#&$*?]).{8,20}$/g;
    var senhaValida = expSenha.exec(input.value);
    var msgSenha = '';

    if(!senhaValida){
        msgSenha = 'Precisa ter pelo menos 1 letra minúscula, maúscula, número e caracter especial (!@#$&?*).';
    }

    input.setCustomValidity(msgSenha);
    
}

//Mostra Senha

var verSenha = document.querySelector('#versenha');

verSenha.addEventListener('change',(evento)=>{
    mostraSenha(evento.target);
})

function mostraSenha(input) {
   if(input.checked){
       senha.type = 'text';
   }else{
       senha.type = 'password';
   }    
}

//Termos de Privacidade
var termoPriv = document.querySelector('#termo');

//Botão de Envio sem termo exibe caixa de alerta
var btnEnviar = document.querySelector('#enviar');

btnEnviar.addEventListener('click',(evento)=>{
    exibeAlertaTermo();
})

function exibeAlertaTermo() {
    if(!termoPriv.checked && senha.validity.valid){
        alert('Você precisa aceitar os Termos de Privacidade, antes de prosseguir.');
    }
}