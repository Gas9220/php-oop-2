<?php 
require_once __DIR__ .'/Product.php';

class Accessory extends Product {
    private $materials;

    public function __construct(string $_name, int $_quantity, string $_brand, string $_description, string $_dimensions, Pet $_product_destination, string $_image, array $_materials) {
        parent::__construct($_name, $_quantity, $_brand, $_description, $_dimensions, $_product_destination, $_image);
        $this->materials = $_materials;
    }
}

$sampleAccessory1 = new Accessory(
    "Scratch Playpost",
    2,
    'Cat-N',
    "Playpost Cat Scratcher with Sisal post, square base and hanging play ball with catnip and carpet base.",
    "29x29x39 5kg",
    Pet::cat,
    "https://www.petshop.co.uk/SCA%20Product%20Images/Playpost-Cat-N-Scratch-Ball-29x29x39cm_1?resizeid=5&resizeh=1200&resizew=1200",
    ["Wood, tissue"]
);

$sampleAccessory2 = new Accessory(
    "Wild Bird Seed Feeder",
    0,
    'Kingdom',
    "This Bird Seed Feeder is manufactured from durable plastic and is easy to use and hang. Simply fill with bird seed and hang with the attached hanging rope.",
    "5x15x5 1kg",
    Pet::bird,
    "https://www.petshop.co.uk/SCA%20Product%20Images/Wild-Bird-Seed-Feeder-with-Birds-Perch_1.png?resizeid=5&resizeh=1200&resizew=1200",
    ["Plastic"]
);

$accessories = [$sampleAccessory1, $sampleAccessory2];