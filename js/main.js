window.addEventListener('load', init);

let cardsContainer;
let recipeField;
let tagsField;
let listFavorites = [];
let webserviceURL;
let webserviceURLTags;
let listFavoritesString;
let favorites;

// ----- Initialize after the DOM is ready ------ //
function init()
{
    webserviceURL = 'webservice/index.php';
    listFavoritesString = localStorage.getItem('listFavorites');
    favorites = JSON.parse(listFavoritesString);

    cardsContainer = document.querySelector(".girdContainer"); // Container for all the cards
    recipeField = document.getElementById('recipeField'); // Field for displaying recipe
    tagsField = document.getElementById('tagsField'); // Field for displaying tags

    cardsContainer.addEventListener('click', readMoreClickHandler); // Global click handler for buttons

    addCards(); // DISPLAY ALL CARDS
}

// ----- Display all cards ----- //
function addCards() {

    fetch(webserviceURL)
        .then((response) => {
            if(!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(getCardItemsSuccessHandler)
        .catch(getCardItemsErrorHandler);
}

function getCardItemsSuccessHandler(data) {
    // create dom elements per item
    for(let item of data) {
        addCard(item);
    }
}

function addCard(dish) {

    // ----- Create new card ----- //
    const cardDiv = document.createElement("div");
    cardDiv.classList.add("card");
    cardDiv.setAttribute('id', dish.id);

    // ----- Create image for card ----- //
    const cardImg = document.createElement("div");
    cardImg.classList.add("bg-img");
    cardImg.style.backgroundImage = "url('https://source.unsplash.com/1600x900/?" + dish.imageTag + "')";

    // ----- Create rating div ----- //
    const cardRating = document.createElement("div");
    cardRating.className = "cardRating";
    const rating = document.createElement("i");
    rating.innerHTML = "<i class=\'fas fa-star\'></i> " + dish.rating + "/10";

    // ----- Create div title card ----- //
    const nameDiv = document.createElement("div");
    nameDiv.classList.add("content");

    // ----- Create title card ----- //
    const cardTitle = document.createElement("h4");
    cardTitle.innerText = dish.name;

    // ----- Create kitchen tag ----- //
    const cardKitchenTag = document.createElement("p");
    cardKitchenTag.innerText = "Kitchen: " + dish.kitchen;
    cardKitchenTag.className = 'kitchenTag';

    // ----- Create read more button ----- //
    const readMore = document.createElement('input');
    readMore.type = 'button';
    readMore.value = 'Read more...';
    readMore.className = 'readMore';
    readMore.dataset.id = dish.id;

    // ----- Create favorite button ----- //
    const favButton = document.createElement('input');
    favButton.type = 'button';
    favButton.value = 'Add to favorites';
    favButton.className = 'favButton';

    // ----- LOOK IN LOCAL STORAGE IF IS FAVORITE ----- //
    if(listFavoritesString && listFavoritesString.includes(dish.id)) {
        showLocalFavorites(dish.id, cardDiv, favButton );
    }

    // ----- ADD ALL IN TO HTML ----- //
    cardsContainer.appendChild(cardDiv);
    cardDiv.appendChild(cardImg);
    cardDiv.appendChild(cardRating);
    cardRating.appendChild(rating);
    cardDiv.appendChild(nameDiv);
    nameDiv.appendChild(cardTitle);
    nameDiv.appendChild(cardKitchenTag);
    nameDiv.appendChild(readMore);
    nameDiv.appendChild(favButton);
}

function showLocalFavorites(id, cardDiv, favButton){
    listFavorites.push(id);
    cardDiv.classList.add("favoriteCard");
    favButton.value = 'Remove from favorites';
    favButton.className = 'removeFavButton';
}

// ----- Shows recipe and tags of the selected dish ----- //
function readMoreClickHandler(e) {
    let currentTargetClassName = e.target.className;
    // ----- IF READ MORE BUTTON PUSHED ----- //
    if (currentTargetClassName === "readMore") {
        getReadMore(e.target.dataset.id);
    }
    // ----- IF FAV BUTTON PUSHED ----- //
    else if (currentTargetClassName === "favButton") {
        let elementCard = e.target.parentElement.parentElement.id;
        document.getElementById(elementCard).classList.add("favoriteCard");
        e.target.value = 'Remove from favorites';
        e.target.className = 'removeFavButton';
        // ----- ADD ELEMENT TO FAVORITES ----- //
        listFavorites.push(elementCard);
        // ----- UPDATE LOCAL STORAGE ----- //
        let listFavoritesString = JSON.stringify(listFavorites);
        localStorage.setItem('listFavorites', listFavoritesString);
    }
    // ----- IF REMOVE FAV BUTTON PUSHED ----- //
    else if (currentTargetClassName === "removeFavButton") {
        let elementCard = e.target.parentElement.parentElement.id;
        document.getElementById(elementCard).classList.remove("favoriteCard");
        e.target.value = 'Add to favorites';
        e.target.className = 'favButton';
        // ----- REMOVE FAVORITE FROM ARRAY ----- //
        let idNumber = Number(elementCard);
        const index = listFavorites.indexOf(idNumber);
        console.log(index);
        if (index > -1) {
            listFavorites.splice(index, 1);
        }
        console.log(listFavorites)
        // ----- UPDATE LOCAL STORAGE ----- //
        let listFavoritesString = JSON.stringify(listFavorites);
        localStorage.setItem('listFavorites', listFavoritesString);
    }
}

// ----- GET READ MORE INFORMATION OF SELECTED DISH ----- //
function getReadMore(id) {
    webserviceURLTags = webserviceURL + "?id=" + id;
    fetch(webserviceURLTags)
        .then((response) => {
            if(!response.ok) {
                throw new Error(response.statusText);
            }
            return response.json();
        })
        .then(showReadMore)
        .catch(getCardItemsErrorHandler);
}

function showReadMore(data) {
    let recipeField = document.getElementById('recipeField');
    let tagsField = document.getElementById('tagsField');

    recipeField.innerText = data.recipe; // DISPLAY RECIPE
    tagsField.innerText = data.tags.join(', '); // DISPLAY TAGS
}

function getCardItemsErrorHandler(data) {
    console.log(data);
}