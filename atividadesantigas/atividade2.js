function recebeComprimentos(lado1,lado2,lado3){
    if (lado1 == lado2 && lado2 == lado3){
        return 'Equilátero'
    }
    else if (lado1 == lado2 || lado2 == lado3 || lado1 == lado3){
        return 'Isósceles'
    }
    else if (lado1 != lado2 && lado2 != lado3){
        return 'Escaleno'
    }
}

console.log(recebeComprimentos(1,2,3))