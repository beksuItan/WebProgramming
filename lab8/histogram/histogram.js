function histogram(){
    let numbers = document.getElementById("numbers").value;
    
    numbers.split(",").map(Number).forEach(element => {
        console.log(`${element}: ${'*'.repeat(element)}`);
    });

}



