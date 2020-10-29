// function addition(first, second){
//     result = first + second;
//     alert(result);
// }

// function substraction(first, second){
//     result = first - second;
//     alert(result);
// }

// function multiplication(first, second){
//     result = first * second;
//     alert(result);
// }

// function division(first, second){
//     result = first / second;
//     alert(result);
// }

// let first = +prompt("Enter first number");
// let second = +prompt("Enter second number");

// addition(first, second);
// substraction(first, second);
// multiplication(first, second);
// division(first, second);


function calc(){
    let operation = document.getElementById("operation").value;
    let first = Number(document.getElementById("first").value);
    let second = Number(document.getElementById("second").value);

    switch(operation){
        case '+':
            result = first + second;
            break;
        case '-':
            result = first - second;
            break;
        case '*':
            result = first * second;
            break;
        case '/':
            if(second === 0){
                alert("Cannot divide");
            }else{
                result = first / second;
            }
            break;
        default:
            console.log("error");
    }

    alert(result);
}



