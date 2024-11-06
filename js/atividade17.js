function somarNumeros(array){

    let novoValor = 0;

    for(i=0;i<array.length;i++){
        novoValor = novoValor + array[i];
    }
    
    console.log(novoValor)
}

somarNumeros([10,10,10])
somarNumeros([15,15,15,15])