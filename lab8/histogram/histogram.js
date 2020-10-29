function histogram(){
    let numbers = document.getElementById("numbers").value;
    let values = numbers.split(",").map(Number);
    
    values.forEach(element => {
        console.log(`${element}: ${'*'.repeat(element)}`);
    });
}



