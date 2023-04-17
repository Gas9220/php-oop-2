<?php 
require_once __DIR__ .'/Product.php';

class Accessory extends Product implements \JsonSerializable {
    private $materials;

    public function __construct(string $_name, int $_quantity, string $_brand, string $_description, string $_dimensions, array $_product_destination, string $_image, array $_materials) {
        parent::__construct($_name, $_quantity, $_brand, $_description, $_dimensions, $_product_destination, $_image);
        $this->materials = $_materials;
    }

    public function jsonSerialize() {
        return get_object_vars($this);
    }
}