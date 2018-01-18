function isAnswer(guess) {
    if(guess === 42) {
        return(true);
    } else {
        return(false);
    }
}

function capitalizeFirstLetter(word) {
    let newWord = word.charAt(0).toUpperCase()+word.substring(1);
    return(newWord);
}

function sumArray(array) {
    sum = 0.0;
    for(i = 0; i < count(array); i++) {
        sum = sum + array[i];
    }
    return(sum);
}