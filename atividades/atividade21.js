const areadoTriangulo = (array) =>{
    let numeromenor = array[0];
    for(numeros in array){
        if(numeromenor > array[numeros]){
            numeromenor = array[numeros]
        }
    }
    console.log(numeromenor)
};


areadoTriangulo([10,5,35,65])
areadoTriangulo([5,-15,50,3])