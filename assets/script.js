function digaOI(nomeAluno){
    alert("Olá, Aluno: " + nomeAluno);
}

function calcularIdade(dataNascimentoStrig) { 
    dataNascimento = new Date(dataNascimentoStrig);
    var diff_ms = Date.now() - dataNascimento.getTime();
    var age_dt = new Date(diff_ms); 
  
    // calcula a idade
    let idade = Math.abs(age_dt.getUTCFullYear() - 1970);
    alert('Idade do aluno é: ' + idade);
}

function calcularIMC(peso, altura){
  let IMC = peso/(altura*altura);
  let resultIMC = '';
  if(IMC<18.5){
    resultIMC = 'Abaixo do peso';
  }else if(IMC>=18.5 && IMC <=24.9){
    resultIMC = 'Peso normal';
  }else if(IMC>=25 && IMC <=29.9){
    resultIMC = 'Sobrepeso';
  }else if(IMC>=30 && IMC <=39.9){
    resultIMC = 'Obesidade';
  }else{
    resultIMC = 'Obesidade Grave';
  }
  alert('Seu IMC é :' + resultIMC);
}