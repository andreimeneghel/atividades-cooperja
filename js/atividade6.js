function inverso(a){
    if (typeof a == 'boolean'){
        return !a;
    }
    else if(typeof a == 'number'){
        return -a;
    }
    return "Retorna boolean ou numero esperados, o parametro do tipo string"

}

console.log(inverso("2000"));