let getMenu = () => {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState ==  4 && this.status == 200){
            showMenu(this);
        }
    };
    xhttp.open("GET", "lab.xml", true);
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
            makeOrder(this);
        }
    };
    xhttp.open("GET", "lab.xml", true);
    xhttp.send();
}

let showMenu = (xml) => {
    let xmlDoc = xml.responseXML;
    let table = "<tr><th>name</th><th>price</th><th>description</th><th>calories</th></tr>";
    
    let x = xmlDoc.getElementsByTagName("food");

    for (let i = 0; i < x.length; i++){
        let name = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
        let price = x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue;
        let description = x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue;
        let calories = x[i].getElementsByTagName("calories")[0].childNodes[0].nodeValue;
        table += "<tr><td>" + name + "</td><td>" + price + "</td><td>" + description + "</td><td>" + calories + "</td><tr>";
    }

    document.getElementById("menu").innerHTML = table;
}

let priceValues=[];
let total = 0;

let makeOrder = (xml) => {
    let xmlDoc = xml.responseXML;
    var table="<tr><th>name</th><th>price</th><th>description</th><th>calories</th><th>Count</th><th>Summary</th></tr>";
    let x = xmlDoc.getElementsByTagName("food");
    
    for (let i = 0; i < x.length; i++){
        
        let name = x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue;
        let price = x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue;
        let description = x[i].getElementsByTagName("description")[0].childNodes[0].nodeValue;
        let calories = x[i].getElementsByTagName("calories")[0].childNodes[0].nodeValue;
        let count = "</td><td> <input value=0 onchange=calcSummary() id='input" + i + "'> ";
        let summary =  "</td><td> <div id='order" + i + "'> </div></td>";
        
        table += "<tr><td>"
        + name + "</td><td>"
        + price + "</td><td>" 
        + description + "</td><td>" 
        + calories + count + summary + "</td></tr>";
        
        priceValues.push(x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue.substr(1));
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