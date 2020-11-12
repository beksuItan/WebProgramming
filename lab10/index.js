let blocks = document.getElementById('blocks');
blocks.style.backgroundColor = 'green';

function random(number){
    let random = Math.floor(Math.random() * (number + 1));
    return random;
}

function bgChange(){ 
    let color = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';   
    return color;
}

for(let i = 0; i < 10;i++){
    let block = document.createElement('div');
    block.style.height = '100px';

    block.addEventListener('click', (e) => {
        e.target.style.backgroundColor = bgChange();
    });

    // block.onclick = (e) => {
    //     e.target.style.backgroundColor = bgChange();
    // }

    blocks.appendChild(block);
}


