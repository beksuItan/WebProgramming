let list = document.getElementById('list');
let inputValue = document.getElementById('inputValue');
let addBtn = document.getElementById('addBtn');

let addItem = function(){

    if(inputValue.value !== "")
    {
        var newLi = document.createElement('li');

        var span = document.createElement('span');
        span.className = "mySpan";

        var deleteButton = document.createElement('button');
        deleteButton.className = "delete-btn";
        deleteButton.innerText = "Delete"
        deleteButton.onclick = deleteItem;

        var txt = document.createElement('p');
        txt.innerHTML = inputValue.value;
        
        
        span.appendChild(txt);
        newLi.appendChild(span);
        newLi.appendChild(deleteButton);
        
        list.appendChild(newLi);
        inputValue.value = "";
    }else{
        alert("Your input value is empty!")
    }
};
 
let deleteItem = function(event)
{
    var item = event.target.parentNode;
    console.log(event.target.parentNode)
    item.remove();
};

