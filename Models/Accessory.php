<?php 
require_once __DIR__ .'/Product.php';

class Accessory extends Product {
    private $materials;

    public function __construct(string $_name, int $_quantity, string $_brand, string $_description, string $_dimensions, array $_product_destination, array $_materials) {
        parent::__construct($_name, $_quantity, $_brand, $_description, $_dimensions, $_product_destination);
        $this->materials = $_materials;
    }
}