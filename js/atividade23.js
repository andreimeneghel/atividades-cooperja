const contarCaractere = (filtro,palavra) => {
    let contador = 0;

    if(typeof filtro == 'string' && typeof palavra == 'string'){

        for(let i = 0;i<palavra.length;i++){
            if(filtro == palavra[i]){
                contador++
            }
        }

    }

    return contador;
}

console.log(contarCaractere('a','cae ecce'));
