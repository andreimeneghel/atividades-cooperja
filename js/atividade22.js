const funcaoDaSorte = (valor) => {
    let numeroAleatorio = Math.floor(Math.random() * 10);

    if(numeroAleatorio == valor){
        console.log("Parabéns! O número sorteador foi o "+ numeroAleatorio);
    }
    else{
        console.log("Que pena! O número sorteador foi o "+ numeroAleatorio);
    }
}

funcaoDaSorte(1)