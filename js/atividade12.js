function removerPropriedade(objeto,remover){
    if (objeto && remover){
        delete objeto[remover];

        console.log(objeto);
    }

}


removerPropriedade({a: 1,b: 2}, "a");
removerPropriedade({
    id: 20,
    nome: "caneta",
    descricao: "nao preenchido"
}, "descricao");

