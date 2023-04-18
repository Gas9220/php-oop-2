<?php

require_once __DIR__ . '/Pet.php';
require_once __DIR__ . '/Price.php';
class Product
{
    use Price;

    protected $name, $quantity, $brand, $description, $dimensions, $product_destination, $image;

    public function __construct(string $_name, int $_quantity, string $_brand, string $_description, string $_dimensions, Pet $_product_destination, string $_image, float $_price)
    {
        $this->name = $_name;
        $this->quantity = $_quantity;
        $this->brand = $_brand;
        $this->description = $_description;
        $this->dimensions = $_dimensions;
        $this->product_destination = $_product_destination;
        $this->image = $_image;
        $this->price = $_price;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_image()
    {
        return $this->image;
    }

    public function get_dimensions()
    {
        return $this->dimensions;
    }

    public function get_description()
    {
        return $this->description;
    }

    public function get_quantity()
    {
        return $this->quantity;
    }

    public function is_product_available()
    {
        return $this->quantity > 0 ? true : false;
    }

    public function product_compatibility()
    {
        $compatibility = '';

        switch ($this->product_destination) {
            case Pet::cat:
                $compatibility = "fa-solid fa-cat";
                break;
            case Pet::dog:
                $compatibility = "fa-solid fa-dog";
                break;
            case Pet::bird:
                $compatibility = "fa-solid fa-crow";
                break;
            default:
                $compatibility = "ciao";
        }
        return $compatibility;
    }

    public function buyProduct() {
        if ($this->quantity <= 0) {
            throw new Exception("Can't buy this product because is sold out");
        }

        return $this->quantity = $this->quantity - 1;
    }
}
