function formatar(valor){

    console.log('R$ ' + valor.toFixed(2).replace('.',','))
}

formatar(0.30000000000000004)