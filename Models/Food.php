<?php
require_once __DIR__ . '/Product.php';

class Food extends Product implements \JsonSerializable
{
    private $ingredients;

    public function __construct(string $_name, int $_quantity, string $_brand, string $_description, string $_dimensions, array $_product_destination, string $_image, string $_ingredients)
    {
        parent::__construct($_name, $_quantity, $_brand, $_description, $_dimensions, $_product_destination, $_image);
        $this->ingredients = $_ingredients;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}