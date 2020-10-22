
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
    reversed = word.split("").reverse().join("");

    (word == reversed) ? alert("Palindrome") : alert("Not palindrome");
};

let word = prompt("Enter word: ");

isPalindrome(word);