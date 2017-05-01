function bubbleSortArr(array) {

    let resultArr = array;

    // setting a fixed length for optimization
    let arrLength = resultArr.length-1;
    let swapped = true;
    let temp;

    while (swapped) {
        swapped = false;
        
        for (var i = 0; i < arrLength; i++) {
            if (resultArr[i] > resultArr[i+1]) 
            {
                temp = resultArr[i];
                resultArr[i] = resultArr[i+1];
                resultArr[i+1] = temp;
                swapped = true;
            }
        }    
    }
    return resultArr;
}


console.log(bubbleSortArr([12,13,16,1,4,11,17,8,9,6,2]));