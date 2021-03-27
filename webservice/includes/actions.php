<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "name" => "Chicken with lemon",
            "kitchen" => "Other kitchens",
            "rating" => 8.1,
            "imageTag" => "chicken food",
        ],
        [
            "id" => 2,
            "name" => "Chicken fillet wrapped in Parma ham",
            "kitchen" => "Italian",
            "rating" => 8,
            "imageTag" => "chicken meat",
        ],
        [
            "id" => 3,
            "name" => "Potatosalad with mustard dressing",
            "kitchen" => "French",
            "rating" => 7.8,
            "imageTag" => "salad",
        ],
        [
            "id" => 4,
            "name" => "Apple crumble",
            "kitchen" => "English",
            "rating" => 8,
            "imageTag" => "apple crumble",
        ],
        [
            "id" => 5,
            "name" => "Roasted mini beets with balsamic dressing",
            "kitchen" => "Italian",
            "rating" => 7.8,
            "imageTag" => "beet salad",
        ],
        [
            "id" => 6,
            "name" => "Lamb with spinach and pine nuts",
            "kitchen" => "Mediterranean",
            "rating" => 8.2,
            "imageTag" => "lamb food",
        ],
        [
            "id" => 7,
            "name" => "Hamburgers with blue cheese",
            "kitchen" => "Italian",
            "rating" => 8,
            "imageTag" => "hamburger",
        ],
        [
            "id" => 8,
            "name" => "Ice lollies",
            "kitchen" => "Eastern",
            "rating" => 8,
            "imageTag" => "ice lolly",
        ],
        [
            "id" => 9,
            "name" => "Chicken with morel velouté",
            "kitchen" => "French",
            "rating" => 8.2,
            "imageTag" => "chicken wings",
        ],
        [
            "id" => 10,
            "name" => "Spare ribs",
            "kitchen" => "Oosters",
            "rating" => 8.3,
            "imageTag" => "spare ribs",
        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        1 => [
            "recipe" => "Place the lemon chicken on a plate and sprinkle the parsley on top. Serve with mashed potatoes and green beans or steamed sugar snaps.",
            "tags" => ['Poultry', 'Main dish']
        ],
        2 => [
            "recipe" => "Cover the chicken breasts with aluminum foil and let them rest in a warm place for 5 minutes. Slice the filled chicken fillets diagonally and place on four warm plates. Delicious with steamed vegetables and mashed potatoes or spiced couscous.",
            "tags" => ['Poultry', 'Main dish']
        ],
        3 => [
            "recipe" => "Drain the boiled potatoes in a colander and let them cool slightly. If desired, peel off the skin with a small knife; wear gloves to protect your hands. Place the still warm potatoes in a large bowl and mix in the dressing. Stir in the peas and broad beans. Taste and add salt and pepper if necessary. Garnish with a few sprigs of dill and serve.",
            "tags" => ['Vegetarian', 'Main dish']
        ],
        4 => [
            "recipe" => "Sprinkle the crumble topping over the fruit and reheat the dish on the stove. When the apple mixture starts to bubble, place the dish in the oven and bake for 12-14 minutes, until the topping is a nice golden yellow. Remove from oven and serve warm.",
            "tags" => ['Vegetarian', 'Dessert']
        ],
        5 => [
            "recipe" => "Heat the butter in a frying pan until foamy, then fold in the beets and fry in the butter for a few minutes, stirring regularly, until shiny. Deglaze them with the balsamic vinegar and let it reduce to a viscous sauce. Serve the beets warm or at room temperature.",
            "tags" => ['Meat', 'Side dish']
        ],
        6 => [
            "recipe" => "Maak een braadslee goed heet op het fornuis. Doe er een scheut olie in en bak het lamsgebraad 10 minuten tot het rondom bruin is. Zet 45-55 minuten in de voorverwarmde oven, afhankelijk van het gewicht en hoe rosé je het wilt hebben. Haal uit de oven en laat rusten.",
            "tags" => ['Meat', 'Main dish']
        ],
        7 => [
            "recipe" => "Verhit een grillpan of steek de barbecue aan. Maak met vochtige handen 6 mooie hamburgers. Bestrijk of besprenkel ze met een beetje olijfolie en rooster ze 7-10 minuten; draai ze halverwege om. Ze horen in het midden nog een klein beetje rosé te zijn.",
            "tags" => ['Meat', 'Main dish']
        ],
        8 => [
            "recipe" => "Laat de ijslolly's voor het serveren 5 minuten op temperatuur komen alvorens de vorm of cup te verwijderen, of houd ze even onder warm water zodat de ijslolly's de vorm loslaten.",
            "tags" => ['Vegetarian', 'Snack']
        ],
        9 => [
            "recipe" => "Snijd het borstvlees zorgvuldig van het karkas en dep de filets droog met keukenpapier. Verhit een beetje olijfolie in een koekenpan met antiaanbaklaag en bak de kipfilets 3-4 minuten aan elke kant, tot het vel knapperig en goudbruin is. Voeg wat klontjes boter toe en bedruip het vlees tijdens de laatste paar minuten om uitdrogen te voorkomen.",
            "tags" => ['Poultry', 'Main dish']
        ],
        10 => [
            "recipe" => "Voeg knoflook, gember, chilivlokken, szechuanpeperkorrels, steranijs en honing toe en bak nog 2 minuten tot de honing begint te karamelliseren. Voeg sojasaus, rijstazijn en rijstwijn toe, breng aan de kook en laat 1 minuut zachtjes koken. Proef en breng op smaak, voeg zo nodig wat extra azijn toe. Voeg lente-ui en bouillon toe en breng aan de kook. Laat in 1 uur mals worden in de voorverwarmde oven en keer de ribbetjes halverwege de kooktijd.",
            "tags" => ['Meat', 'Main dish']
        ],
    ];

    return $tags[$id];
}
