window.addEventListener('load', init);
let cardsContainer;
let recipeField;
let tagsField;

// ----- All dishes ----- //
const dishes = [
    { name: "Gordon Ramsay: lemon chicken", image: "./images/picHkQcGP.jpg", recipe: "Place the lemon chicken on a plate and sprinkle the parsley on top. Serve with mashed potatoes and green beans or steamed sugar snaps.", tags: 'poultry, main dish'},
    { name: "Gordon Ramsay: Stuffed chicken fillet wrapped in Parma ham", image: "./images/Chicken-breast-stuffed-with-ricotta-cheese-wrapped-in-Parma-ham.jpg", recipe: "Cover the chicken breasts with aluminum foil and let them rest in a warm place for 5 minutes. Slice the filled chicken fillets diagonally and place on four warm plates. Delicious with steamed vegetables and mashed potatoes or spiced couscous.", tags: "poultry, main dish" },
    { name: "Gordon Ramsay: potato salad with mustard dressing", image: "./images/creme-fraiche-potato-salad.jpg", recipe: "Drain the boiled potatoes in a colander and let them cool slightly. If desired, peel off the skin with a small knife; wear gloves to protect your hands. Place the still warm potatoes in a large bowl and mix in the dressing. Stir in the peas and broad beans. Taste and add salt and pepper if necessary. Garnish with a few sprigs of dill and serve.", tags: "vegetarian, main dish" },
    { name: "Gordon Ramsay: apple crumble", image: "./images/appleCrumble.jpg", recipe: "Sprinkle the crumble topping over the fruit and reheat the dish on the stove. When the apple mixture starts to bubble, place the dish in the oven and bake for 12-14 minutes, until the topping is a nice golden yellow. Remove from oven and serve warm.", tags: "vegetarian, dessert" },
    { name: "Gordon Ramsay: Roasted mini beets with balsamic dressing", image: "./images/Beet-Salad.jpg", recipe: "Heat the butter in a frying pan until foamy, then fold in the beets and fry in the butter for a few minutes, stirring regularly, until shiny. Deglaze them with the balsamic vinegar and let it reduce to a viscous sauce. Serve the beets warm or at room temperature.", tags: "meat, side dish"}
];

// ----- Initialize after the DOM is ready ------ //
function init()
{
    cardsContainer = document.querySelector(".girdContainer"); // Container for all the cards
    recipeField = document.getElementById('recipeField'); // Field for displaying recipe
    tagsField = document.getElementById('tagsField'); // Field for displaying tags

    cardsContainer.addEventListener('click', readMoreClickHandler); // Global click handler for buttons

    addCards();
}

// ----- Display all cards ----- //
function addCards() {
    for (let dish of dishes) {
        addCard(dish);
    }
}

function addCard(dish) {

    // ----- Create new card ----- //
    const cardDiv = document.createElement("div");
    cardDiv.classList.add("card");
    cardsContainer.appendChild(cardDiv);

    // ----- Create image for card ----- //
    const cardImg = document.createElement("div");
    cardImg.classList.add("bg-img");
    cardImg.style.backgroundImage = "url('" + dish.image + "')";
    cardDiv.appendChild(cardImg);

    // ----- Create div title card ----- //
    const nameDiv = document.createElement("div");
    nameDiv.classList.add("content");
    cardDiv.appendChild(nameDiv);

    // ----- Create title card ----- //
    const cardTitle = document.createElement("h4");
    cardTitle.innerText = dish.name;
    nameDiv.appendChild(cardTitle);

    // ----- Create read more button ----- //
    const readMore = document.createElement('input');
    readMore.type = 'button';
    readMore.value = 'Read more...';
    readMore.className = 'readMore';
    readMore.dataset.recipe = dish.recipe;
    readMore.dataset.tags = dish.tags;
    nameDiv.appendChild(readMore);

    // ----- Create favorite button ----- //
    const favButton = document.createElement('input');
    favButton.type = 'button';
    favButton.value = 'Add to favorites';
    favButton.className = 'favButton';
    nameDiv.appendChild(favButton);
}

// ----- Shows recipe and tags of the selected dish ----- //
function readMoreClickHandler(e) {
    let currentTargetClassName = e.target.className;

    if(currentTargetClassName !== "readMore") {
        return;
    }

    recipeField.innerHTML = e.target.dataset.recipe;
    tagsField.innerHTML = e.target.dataset.tags;
}