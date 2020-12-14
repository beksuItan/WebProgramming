let getMenu = () => {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState ==  4 && this.status == 200){
            let menu = JSON.parse(this.responseText).breakfast_menu;
            showMenu(menu);
        }
    };
    xhttp.open("GET", "menu.json", true);
    xhttp.send();

    let orderBtn = document.createElement("button");

    orderBtn.innerText = "Make an Order";
    document.body.appendChild(orderBtn);
    orderBtn.addEventListener("click", () => getOrderMenu());

}

let getOrderMenu = () => {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState ==  4 && this.status == 200){
            let menu = JSON.parse(this.responseText).breakfast_menu;
            makeOrder(menu);
        }
    };
    xhttp.open("GET", "menu.json", true);
    xhttp.send();
}

let showMenu = (menu) => {
    let table = "<tr><th>name</th><th>price</th><th>description</th><th>calories</th></tr>";
    let foods = menu.food;
    for(let i in foods){
        let name = foods[i].name;
        let price = foods[i].price;
        let description = foods[i].description;
        let calories = foods[i].calories;
        table += "<tr><td>" + name + "</td><td>" + price + "</td><td>" + description + "</td><td>" + calories + "</td><tr>";
    }
    
    document.getElementById("menu").innerHTML = table;
}

let priceValues=[];
let total = 0;

let makeOrder = (menu) => {
    let table = "<tr><th>name</th><th>price</th><th>description</th><th>calories</th><th>Count</th><th>Summary</th></tr>";
    let foods = menu.food;
    
    for(let i in foods){
        let name = foods[i].name;
        let price = foods[i].price;
        let description = foods[i].description;
        let calories = foods[i].calories;
        let count = "</td><td> <input onchange=calcSummary() id='input" + i + "'> ";
        let summary =  "</td><td> <div id='order" + i + "'> </div></td>";

        table += "<tr><td>"
        + name + "</td><td>"
        + price + "</td><td>" 
        + description + "</td><td>" 
        + calories + count + summary + "</td></tr>";
        
        priceValues.push(foods[i].price.substr(1));
    }

    table += "<tr><td>" + "<div> Summary: " + total + "</div>" + "</td></tr>";

    document.getElementById("ordermenu").innerHTML = table;
}


let calcSummary = () => {   
    for (let i = 0; i < 5; i++){
        let input = "input" + i;
        let order = "order" + i;
        let inputValue = document.getElementById(input).value;
        if(inputValue != ""){
            let summaryValue = priceValues[i] * inputValue;
            total += summaryValue;
            document.getElementById(order).innerHTML = summaryValue;
        }
    }
}