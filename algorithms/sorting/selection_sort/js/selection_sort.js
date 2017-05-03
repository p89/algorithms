function selection_sort(array)
{
    let arrayLength = array.length;
    for(let j=0; j<arrayLength-1; j++)
    {
        let pmin = j;
        for(let i=j+1; i<arrayLength; i++)
        {
            if(array[i] < array[pmin])
            {
                pmin = i;
            }
        }
        let x = array[pmin];
        array[pmin] = array[j];
        array[j] = x;
    }   
    return array;
}

console.log(selection_sort([3,2,1,6,7,8,4,9,11,10]));



