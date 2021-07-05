
    
    var valorCep = document.querySelector('#cep');
    var verificaCep;
    var expCep = new RegExp(/(\d{5})-(\d{3})/, 'g'); //Se declarar a expressão como global, deve-se executar antes de testar.

valorCep.addEventListener('blur',function(){
   
    verificaCep = expCep.exec(valorCep.value); //Inicializa 

    if(!verificaCep){
        for (var i = 0; i < verificaCep.length; i++){ //Verifica
            expCep.exec(valorCep.value);
        }
    }
    //console.log(expCep.test(valorCep.value)); //O teste dá TRUE 
    
    //Se não Iterar o valor será FALSE.

    //Sem a Flag Global o comportamento da Regex é mais simples

    if(valorCep.va){
        valorCep.setCustomValidity('Você precisa inserir o CEP corretamente');
    }
}) 




//CEP (\d{5})-(\d{3})

//Telefone \(?\d{2}\)?[\s]?\d{4,5}-?\d{4}

//CNPJ \d{2}\.\d{3}\.\d{3}\/0001-\d{2}

//E-mail ([\w].{3,20})@([\w].+)\.([\w]{3,5})

//CPF (\d{3})[\.]?(\d{3})[\.]?(\d{3})[-]?(\d{2})

//PLACA PADRÃO ANTIGO [a-zA-Z]{3}-\d{4}

//SenhaForte ^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z])(?=.*[!@#&$*?]).{8,20}$