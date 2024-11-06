function removerVogais(a){
    let novaWord = '';
    let vogais = ['a','e','i','o','u']
    for (let i = 0; i < a.length; i++) {
        if (!vogais.includes(a[i].toLowerCase())) {
            novaWord += a[i];
        }
    }
    console.log(novaWord)
}

removerVogais('Cod3r')
removerVogais('Fundamentos')