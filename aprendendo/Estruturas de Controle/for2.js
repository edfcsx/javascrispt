const notas = [6.7, 7.4, 9.8, 8.1, 7.7]

//Pegando os indices do array

for (let i in notas){
    console.log(i, notas[i])
}

const pessoa = {
    nome: 'Ana',
    sobrenome: 'Silvia',
    idade: 29,
    peso: 64
}

//Pegando os atributos do objeto

for(let atributo in pessoa){
    console.log(`${atributo} = ${pessoa[atributo]}`)
}

