<?php
$products = array(
    array(
        "Call of Duty",
        "Shooter",
        59.95,
    ),
    array(
        "Rocket League",
        "Sport",
        19.95,

    ),

    array(
        "Assassins Creed",
        "RP",
        49.95,
    ),
);

$amountPrice = 0;
$totalPrice = 0;

$amountCharacters = 0;
$totalCharacters = 0;

foreach ($products as $product) {
    $totalPrice += $product[2];
    $amountPrice++;

    $totalCharacters += strlen($product[0]);
    $amountCharacters++;
}

$averagePrice = $totalPrice / $amountPrice;
$averageCharacter = $totalCharacters / $amountCharacters;

print(var_dump($products));
print('________________________________' . PHP_EOL);
print('Gemiddelde prijs: €' . round($averagePrice, 2) . PHP_EOL);
print('Gemiddelde lengte van titel: ' . round($averageCharacter) . ' karakters' . PHP_EOL);
