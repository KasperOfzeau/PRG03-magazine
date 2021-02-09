<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [
            "id" => 1,
            "name" => "Gordon Ramsay: citroenkip",
            "kitchen" => "Overige keukens",
            "rating" => 8.1,
        ],
        [
            "id" => 2,
            "name" => "Gordon Ramsay: gevulde kipfilet gewikkeld in parmaham",
            "kitchen" => "Italiaans",
            "rating" => 8,
        ],
        [
            "id" => 3,
            "name" => "Gordon Ramsay: aardappelsalade met mosterddressing",
            "kitchen" => "Frans",
            "rating" => 7.8,
        ],
        [
            "id" => 4,
            "name" => "Gordon Ramsay: appel crumble",
            "kitchen" => "Engels",
            "rating" => 8,
        ],
        [
            "id" => 5,
            "name" => "Gordon Ramsay: geroosterde minibieten met balsamicodressing",
            "kitchen" => "Italiaans",
            "rating" => 7.8,
        ],
        [
            "id" => 6,
            "name" => "Gordon Ramsay: gevuld lamsvlees met spinazie en pijnboompitten",
            "kitchen" => "Mediterraan",
            "rating" => 8.2,
        ],
        [
            "id" => 7,
            "name" => "Gordon Ramsay: hamburgers met blauwe kaas",
            "kitchen" => "Italiaans",
            "rating" => 8,
        ],
        [
            "id" => 8,
            "name" => "Gordon Ramsay: ijslolly's met watermeloen en mango",
            "kitchen" => "Oosters",
            "rating" => 8,
        ],
        [
            "id" => 9,
            "name" => "Gordon Ramsay: kip met morieljevelouté",
            "kitchen" => "Frans",
            "rating" => 8.2,
        ],
        [
            "id" => 10,
            "name" => "Gordon Ramsay: kleverige spareribs",
            "kitchen" => "Oosters",
            "rating" => 8.3,
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
            "recipe" => "Leg de citroenkip op een schaal en strooi de peterselie erover. Geef er aardappelpuree en sperzieboontjes of gestoomde sugarsnaps bij.",
            "tags" => ['gevogelte', 'hoofdgerecht']
        ],
        2 => [
            "recipe" => "Dek de kipfilets af met aluminiumfolie en laat ze op een warme plaats 5 minuten rusten. Snijd de gevulde kipfilets diagonaal in plakken en leg die op vier warme borden. Lekker met gestoomde groenten en aardappelpuree of gekruide couscous.",
            "tags" => ['gevogelte', 'hoofdgerecht']
        ],
        3 => [
            "recipe" => "Laat de gekookte aardappelen uitlekken in een vergiet en laat ze enigszins afkoelen. Trek indien gewenst de schil eraf met een klein mesje; draag handschoenen om uw handen te beschermen. Leg de nog warme aardappelen in een grote kom en meng de dressing erdoor. Roer de doperwten en tuinbonen erdoor. Proef en voeg indien nodig peper en zout toe. Garneer met enkele takjes dille en serveer.",
            "tags" => ['vegetarisch', 'hoofdgerecht']
        ],
        4 => [
            "recipe" => "Strooi de crumbletopping over het fruit en verhit de schaal opnieuw op het fornuis. Zet als het appelmengsel begint te borrelen de schaal in de oven en bak 12-14 minuten, tot de topping mooi goudgeel is. Haal uit de oven en dien warm op.",
            "tags" => ['vegetarisch', 'nagerecht']
        ],
        5 => [
            "recipe" => "Verhit de boter in een braadpan tot hij schuimt, schep dan de bietjes erdoor en bak ze onder regelmatig omscheppen een aantal minuten in de boter, tot ze glanzen. Blus ze af met de balsamicoazijn en laat hem inkoken tot een stroperige saus. Serveer de bietjes warm of op kamertemperatuur.",
            "tags" => ['vegetarisch', 'bijgerecht']
        ],
        6 => [
            "recipe" => "Maak een braadslee goed heet op het fornuis. Doe er een scheut olie in en bak het lamsgebraad 10 minuten tot het rondom bruin is. Zet 45-55 minuten in de voorverwarmde oven, afhankelijk van het gewicht en hoe rosé je het wilt hebben. Haal uit de oven en laat rusten.",
            "tags" => ['vlees', 'hoofdgerecht']
        ],
        7 => [
            "recipe" => "Verhit een grillpan of steek de barbecue aan. Maak met vochtige handen 6 mooie hamburgers. Bestrijk of besprenkel ze met een beetje olijfolie en rooster ze 7-10 minuten; draai ze halverwege om. Ze horen in het midden nog een klein beetje rosé te zijn.",
            "tags" => ['vlees', 'hoofdgerecht']
        ],
        8 => [
            "recipe" => "Laat de ijslolly's voor het serveren 5 minuten op temperatuur komen alvorens de vorm of cup te verwijderen, of houd ze even onder warm water zodat de ijslolly's de vorm loslaten.",
            "tags" => ['vegetarisch', 'hapje']
        ],
        9 => [
            "recipe" => "Snijd het borstvlees zorgvuldig van het karkas en dep de filets droog met keukenpapier. Verhit een beetje olijfolie in een koekenpan met antiaanbaklaag en bak de kipfilets 3-4 minuten aan elke kant, tot het vel knapperig en goudbruin is. Voeg wat klontjes boter toe en bedruip het vlees tijdens de laatste paar minuten om uitdrogen te voorkomen.",
            "tags" => ['gevogelte', 'hoofdgerecht']
        ],
        10 => [
            "recipe" => "Voeg knoflook, gember, chilivlokken, szechuanpeperkorrels, steranijs en honing toe en bak nog 2 minuten tot de honing begint te karamelliseren. Voeg sojasaus, rijstazijn en rijstwijn toe, breng aan de kook en laat 1 minuut zachtjes koken. Proef en breng op smaak, voeg zo nodig wat extra azijn toe. Voeg lente-ui en bouillon toe en breng aan de kook. Laat in 1 uur mals worden in de voorverwarmde oven en keer de ribbetjes halverwege de kooktijd.",
            "tags" => ['vlees', 'hoofdgerecht']
        ],
    ];

    return $tags[$id];
}
