//calculadora: suma, resta, multiplicación, división.

function calculadora(num1,operador,num2){
    let resultado;
    switch(operador){
        case "+": resultado = num1 + num2;
        break;
        case "-": resultado = num1 - num2;
        break;
        case "*": resultado = num1 * num2;
        break;
        case "/": resultado = num1 / num2;
        break;

        default: resultado = "operador aritmético inexistente"
    }
    console.log(resultado);
}

num1 = parseInt(prompt("Ingrese un número"));

operador = parseInt(prompt("Elija operador: +,-,*,/"));

num2 = parseInt(prompt("Ingrese otro número"));
console.log(num1, num2);

calculadora(num1,operador,num2);
