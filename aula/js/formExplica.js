
nome = document.getElementById('nome');

function validaNome() {
    var expNome = /^([^0-9]){3,50}$/g;
    var nomeVerificado = expNome.exec(nome.value);
    var msgNome = ' ';

    if(!nomeVerificado){
        msgNome = 'O nome precisa ser completo e sem números';
    }
    
    nome.setCustomValidity(msgNome);
}
//Email
email = document.querySelector('#email');

email.addEventListener('blur',validaEmail(),false,);

function validaEmail() {
    var expEmail = /^([\w_.]*)@([\w-.]*)\.([a-z.]){3,6}$/g;
    var emailVerificado = expEmail.exec(email.value);
    var msgEmail = '';

    if(!emailVerificado){
        msgEmail = 'Digite um e-mail válido.';
    }

    email.setCustomValidity(msgEmail);
}

//CPF

cpf = document.querySelector('#cpf');

cpf.addEventListener('blur',(eventoLegal)=>{
    verificaCpf(eventoLegal.target);
})

function verificaCpf(input) {
   var expCpf = /(\d{3})(\d{3})(\d{3})(\d{2})/g;
   var cpfVerificado = expCpf.exec(input.value);
   var msgCpf = '';

   if(!cpfVerificado){
       msgCpf = 'Digite apenas números';
   }

   input.setCustomValidity(msgCpf);
   input.value = formataCpf(input.value, expCpf);
}

function formataCpf(valorCpf, cpfExp) {
    var cpfFormatado = valorCpf.replace(cpfExp, function(vregex,p1,p2,p3,p4){
        return p1+'.'+p2+'.'+p3+'-'+p4;
    })

    return cpfFormatado;
}


/* validação CEP
var valorCep = document.querySelector('#cep');
var expCep = new RegExp(/(\d{5})-(\d{3})/, 'g'); //Se declarar a expressão como global, deve-se executar antes de testar.
var btnSubmit = document.getElementsByName('enviar');

function verificaCep(){
   
    var verificaCep = expCep.test(valorCep.value); //Inicializa 
    var mensagem = '';
    
    
    if(verificaCep){
        valorCep.className = 'azul';
        //btnSubmit[0].disabled = false;
        
    }else{
        valorCep.className = 'vermelho';
        mensagem = 'Digite o CEP com apenas números.';
        //btnSubmit[0].disabled = true;
    }
    valorCep.setCustomValidity(mensagem);

    console.log(verificaCep);
}*/