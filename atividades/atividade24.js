function buscarPalavrasSemelhantes(a,b){
    return b.filter(palavra => palavra.includes(a))
}


console.log(buscarPalavrasSemelhantes("pro",["programação", "mobile", "profissional"]));

console.log(buscarPalavrasSemelhantes("python",["javascript", "java", "c++"]));