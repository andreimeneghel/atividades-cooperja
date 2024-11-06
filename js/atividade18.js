function despesasTotais(array){
    let novoValor = 0;

    for(let i=0;i<array.length;i++){
        novoValor = novoValor + array[i].preco
    }
    console.log(novoValor)
}

despesasTotais([
    {nome:"Jornal online", categoria: "informacao", preco: 89.99},
    {nome:"Cinema", categoria: "Entretenimento", preco: 150}
])

despesasTotais([
    {nome:"Galaxy S20", categoria: "Eletrônicos", preco: 3599.99},
    {nome:"Macbook Pro", categoria: "Eletrônicos", preco: 30999.90}
])