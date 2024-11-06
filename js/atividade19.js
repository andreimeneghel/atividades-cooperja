function calcularMedia(array){
    let valorTotal = 0;
    for(numero of array){
        valorTotal += numero
    }
    console.log(valorTotal / array.length);
}


calcularMedia([0,10])
calcularMedia([1,2,3,4,5])