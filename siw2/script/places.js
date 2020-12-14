let getPlaces = () => {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState ==  4 && this.status == 200){
            let places = JSON.parse(this.responseText).places;
            showPlaces(places);
        }
    };
    xhttp.open("GET", "places.json", true);
    xhttp.send();

}

let showPlaces = (places) => {
    const travelPlace = document.getElementById("travel");

    places.map(function(place){
        let placeBlock = document.createElement("div");
        placeBlock.className = "place";

        let image = document.createElement("img");
        image.src = `images/${place.image}`;
        image.width = '350';
        image.height= '250';
        placeBlock.append(image);

        let title = document.createElement("div");
        title.className = "place-title";
        title.innerText = place.title; 

        placeBlock.append(title);

        let subtitle = document.createElement("div");
        subtitle.className = "place-subtitle";
        subtitle.innerText = place.subtitle; 

        placeBlock.append(subtitle);

        let price = document.createElement("div");
        price.className = "place-price";
        price.innerText = `From $${place.price}`;
        placeBlock.append(price);

        travelPlace.append(placeBlock);
    });
}
