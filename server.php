<?php

$database = file_get_contents(__DIR__.'/products.json');

header('Content-Type: application/json');
echo $database;