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

    public function is_product_available() {
        return $this->quantity > 0 ? true : false;
    }
}

$newProduct = new Product("Royal Canin", 0, "Royal Canin", "lorem", "22x50x10 10kg", ['Dog']);
echo $newProduct->is_product_available();

?>