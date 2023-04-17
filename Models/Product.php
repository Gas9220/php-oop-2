<?php

require_once __DIR__ .'/Pet.php';

class Product implements \JsonSerializable {
    protected $name, $quantity, $brand, $description, $dimensions, $product_destination, $image;

    public function __construct(string $_name, int $_quantity, string $_brand, string $_description, string $_dimensions, array $_product_destination, string $_image) {
        $this->name = $_name;
        $this->quantity = $_quantity;
        $this->brand = $_brand;
        $this->description = $_description;
        $this->dimensions = $_dimensions;
        $this->product_destination = $_product_destination;
        $this->image = $_image;
    }

    public function is_product_available() {
        return $this->quantity > 0 ? true : false;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}

?>