<?php

class Product {
    private $name, $quantity, $brand, $description, $dimensions, $product_destination;

    public function __construct(string $_name, int $_quantity, string $_brand, string $_description, string $_dimensions, array $_product_destination) {
        $this->name = $_name;
        $this->quantity = $_quantity;
        $this->brand = $_brand;
        $this->description = $_description;
        $this->dimensions = $_dimensions;
        $this->product_destination = $_product_destination;
    }
}

?>