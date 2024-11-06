const recebeComprimentos = (array) => {
    const newArray = [];

    for (let i = 0; i < array.length; i++) {
        if (i % 2 === 0 && array[i] % 2 === 0) {
            newArray.push(array[i]);
        }
    }

    return newArray;
}

console.log(recebeComprimentos([1, 2, 3, 4]));
console.log(recebeComprimentos([10, 70, 22, 43])); 