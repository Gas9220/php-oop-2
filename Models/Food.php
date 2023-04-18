<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    private $ingredients;

    public function __construct(string $_name, int $_quantity, string $_brand, string $_description, string $_dimensions, Pet $_product_destination, string $_image, float $_price, string $_ingredients)
    {
        parent::__construct($_name, $_quantity, $_brand, $_description, $_dimensions, $_product_destination, $_image, $_price);
        $this->ingredients = $_ingredients;
    }

    public function get_ingredients()
    {
        return $this->ingredients;
    }
}

$sampleFood1 = new Food(
    "Maxi Adult",
    10,
    "Royal Canin",
    "The nutritional requirements of a larger breed dog versus a smaller breed dog vary greatly, therefore it is essential you feed a balanced diet according to size and other particular sensitivities. ROYAL CANIN® Maxi Adult food is specially formulated with your dog's nutritional needs in mind. This food is suitable for large dogs aged 15 months and over - with an adult weight ranging between 26-44kg.",
    "22x50x5 12kg",
    Pet::dog,
    "https://shop-cdn-m.mediazs.com/bilder/royal/canin/maxi/adult/crocchette/per/cani/8/400/80729_pla_royalcanin_maxiadult_15kg_hs_01_8.jpg",
    69.99,
    "Dehydrated poultry protein, maize, maize flour, animal fats, wheat, dehydrated pork protein, rice, hydrolysed animal proteins, maize gluten, beet pulp, minerals, fish oil, soya oil, yeasts and parts thereof, hydrolysed crustaceans, hydrolysed cartilage."
);

$sampleFood2 = new Food(
    "Kitten Loaf In Sauce",
    10,
    "Royal Canin",
    "When your kitten is around 4 months old, their growth rate might slow but their activity levels are on the up and up! It's a time when your kitten needs the right nutrients to support developing bones, muscles, organs, and immune and nervous systems. Very soon, your kitten will also develop 30 adult teeth.",
    "12x22x3 5kg",
    Pet::cat,
    "https://shop-cdn-m.mediazs.com/bilder/royal/canin/kitten/in/salsa/alimento/umido/per/gatti/3/400/rc_spt_wet_kitten_cig_mv_3_it_it_3.jpg",
    0.79,
    "Meat and animal derivatives, vegetable protein extracts, derivatives of vegetable origin, cereals, minerals, vegetables, oils and fats, yeasts"
    
);

$foods = [$sampleFood1, $sampleFood2];
