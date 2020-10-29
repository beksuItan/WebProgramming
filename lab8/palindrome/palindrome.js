
// function isPalindrome(word){
//     reversed = word.split("").reverse().join("");
//     if(word == reversed){
//         alert("Palindrome");
//     }
//     else{
//         alert("Not palindrome");
//     }
// }

let isPalindrome = (word) => {
    // reversed = word.split("").reverse().join("");
    // (word == reversed) ? alert("Palindrome") : alert("Not palindrome");

    let isPal = true;
    for(let i = 0; i <= word.length;i++){
        if(word[i] !== word[word.length - 1 - i]){
            isPal = false;
        }
    }

    return isPal;

};

function test(){
    let word = document.getElementById("val").value;

    (isPalindrome(word)) ? alert("Palindrome"): alert("Not palindrome");

}
