// Encontrar el número mayor de una lista de números en un array

let numero = [18, 25, 32, 41, 59, 68,72, 84, 91, 10];
let numeroMaximo = 0;
let tamano = numero.length;

for (let i = 0; i < tamano; i++) {
    if (numeroMaximo < numero[i]) {  
        numeroMaximo = numero[i];
    
    }    
}

console.log(numeroMaximo)

let maximo = Math.max(numero);
console.log(maximo)