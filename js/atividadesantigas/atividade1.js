function calculo(a,b){

    if (typeof a == 'number' && typeof b == 'number' ){
        
        console.log("Soma: " + (a+b));
        console.log("Diminuição: " + (a-b));
        console.log("Multiplicação: " + (a*b));
        console.log("Divisão: " + (a/b));
    }
    else{
        console.log("Apenas permitidos numeros")
    }
}

calculo(5,5)

