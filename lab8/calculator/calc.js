function calc(operation){
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
            result = first / second;
            break;
        case '%':
            result = first % second;
            break;
        default:
            alert('You need enter value');
    }

    alert(result);
}

let first = +prompt("Enter first number");
let second = +prompt("Enter second number");
let operation = prompt("Enter operation");

calc(operation, first, second);