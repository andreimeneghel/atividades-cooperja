function multiplicar(a,b){
    let valorFinal = 0;
    if(a >= 0 && b >= 0){
        for(i=0;i<b;i++){
            valorFinal = valorFinal + a;
        }
        console.log(valorFinal);
    }
}

multiplicar(5,5);

multiplicar(0,7);