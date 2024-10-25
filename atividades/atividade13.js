function filtrarNumeros(array){
    const arrayconsulta = [];
    if(array){
        for(i=0;i<array.length;i++){
            if(typeof array[i] == 'number' ){
                arrayconsulta.push(array[i])
            }
        }
        console.log(arrayconsulta);
    }
}

filtrarNumeros(["Javascript", 1, "3", "Web",20]);
filtrarNumeros(["a","c"]);