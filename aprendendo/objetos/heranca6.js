function Aula(nome, videoID){
    this.nome = nome,
    this.videoID = videoID
}

const aula1 = new Aula('bem vindo', 123)
const aula2 = new Aula('Até Breve', 456)

console.log(aula1,aula2)

//simulando o new
function novo(f, ...params){
    const obj= {}
    obj.__proto__ = f.protype
    f.apply(obj, params)
    return obj
}

const aula3 = novo(Aula, 'Bem vindo', 123)
const aula4 = novo(Aula, 'ate breve', 456)

console.log(aula3,aula4)