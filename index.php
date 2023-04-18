<?php
require_once __DIR__ . '/server.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Zoolandia</h1>
    </header>
    <div class="container">
        <h2>Food for your pets</h2>
        <div class="product">
            <?php foreach ($database[0] as $food) : ?>
                <div class="product-card">
                    <img :src="<?php echo $food->get_image(); ?>" alt="">
                    <div>
                        <h4><?php echo $food->get_name(); ?></h4>
                        <span>Suitable for: <i class="<?php echo $food->product_compatibility(); ?>"></i></span>
                        <span>Remaining quantity: <?php echo $food->get_quantity(); ?><i class="fa-solid fa-circle-dot" style="<?php echo $food->is_product_available() ? "color:green" : "color:red" ?>"></i></span>
                        <span>Pack weight - dimensions: <?php echo $food->get_dimensions(); ?></span>
                        <span>Description: <?php echo $food->get_description(); ?></span>
                        <span>Ingredients: <?php echo $food->get_ingredients(); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <h2>Accessories for your pets</h2>
        <div class="product">
            <?php foreach ($database[1] as $accessory) : ?>
                <div class="product-card">
                    <img :src="<?php echo $accessory->get_image(); ?>" alt="">
                    <div>
                        <h4><?php echo $accessory->get_name(); ?></h4>
                        <span>Suitable for: <i class="<?php echo $accessory->product_compatibility(); ?>"></i></span>
                        <span>Remaining quantity: <?php echo $accessory->get_quantity(); ?><i class="fa-solid fa-circle-dot" style="<?php echo $accessory->is_product_available() ? "color:green" : "color:red" ?>"></i></span>
                        <span>Pack weight - dimensions: <?php echo $accessory->get_dimensions(); ?></span>
                        <span>Description: <?php echo $accessory->get_description(); ?></span>
                        <span>Ingredients: <?php echo $accessory->get_materials(); ?></span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>