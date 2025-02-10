function logicaEjercicioDos (a, b) {
    restando = a - b;
    sumando = a + b;
    resultado = console.log(`el resultado es ${restando}${sumando}`);
    return resultado;
}
let numeros = [5, 8, 10, 12, 18, 21];
let numerosDos = [4, 2, 8, 9, 2, 5 ];

for (i = 0; i < numeros.length; i++ ) {
    console.log(logicaEjercicioDos(numeros[i],numerosDos[i]))
}
```function logicaEjercicioDos (a, b) {    restando = a - b;    sumando = a + b;    resultado = console.log(`el resultado es ${restando}${sumando}`);    return resultado;}let numeros = \[5, 8, 10, 12, 18, 21];let numerosDos = \[4, 2, 8, 9, 2, 5 ];
for (i = 0; i < numeros.length; i++ ) {    console.log(logicaEjercicioDos(numeros\[i],numerosDos\[i]))}