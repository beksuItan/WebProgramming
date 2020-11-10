let blocks = document.getElementById('blocks');

blocks.style.backgroundColor = 'green';

let random = (number) => Math.floor(Math.random() * (number + 1)); 

let bgChange = () => {
    let color = 'rgb(' + random(255) + ',' + random(255) + ',' + random(255) + ')';   
    return color;
}

let addBlock = () => {
    let block = document.createElement('div');

    block.style.height = '100px';

    block.onclick = (e) => {
        e.target.style.backgroundColor = bgChange();
    }

    // block.addEventListener('click', (e) => {
    //     e.target.style.backgroundColor = bgChange();
    // });

    return block;
}


for(let i = 0; i < 10;i++){
    blocks.appendChild(addBlock());
}

