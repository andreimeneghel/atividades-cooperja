function receberPrimeiroEUltimoElemento(array){
    const arrayfinalizado = [];
    arrayfinalizado.push(array[0],array[array.length-1])
    return console.log(arrayfinalizado)
}

receberPrimeiroEUltimoElemento([7,14,"olá"]);
receberPrimeiroEUltimoElemento([-100,"aplicativo",16]);