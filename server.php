<?php

require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Accessory.php';

$database = [$foods, $accessories];

if (array_key_exists('buy-accessory', $_GET)) {
    try {
        $index = reset($_GET);
        $itemToBuy = $database[1][$index];
        $itemToBuy->buyProduct();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

if (array_key_exists('buy-food', $_GET)) {
    try {
        $index = reset($_GET);
        $itemToBuy = $database[0][$index];
        $itemToBuy->buyProduct();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}