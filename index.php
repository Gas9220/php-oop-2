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
    <div id="app">
        <header>
            <h1>Zoolandia</h1>
        </header>

        <div class="container">
            <h2>Food for your pets</h2>
            <div class="product">
                <div v-for="food in products.foods">
                    <div class="product-card">
                        <img :src="food.image" alt="">
                        <div>
                            <h4>{{ food.brand }}: {{ food.name }}</h4>
                            <span>Suitable for: <i :class="checkProductCompatibility(food.product_destination[0])"></i></span>
                            <span>Remaining quantity: {{ food.quantity }}</span>
                            <span>Pack weight - dimensions: {{ food.dimensions }}</span>
                            <span>Description: {{ food.description }}</span>
                            <span>Ingredients: {{ food.ingredients }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <h2>Accessories for your pets</h2>
            <div class="product">
                <div v-for="accessory in products.accessories">
                    <div class="product-card">
                        <img :src="accessory.image" alt="">
                        <div>
                            <h4>{{ accessory.brand }}: {{ accessory.name }}</h4>
                            <span>Suitable for: <i :class="checkProductCompatibility(accessory.product_destination[0])"></i></span>
                            <span>Remaining quantity: {{ accessory.quantity }}</span>
                            <span>Pack weight - dimensions: {{ accessory.dimensions }}</span>
                            <span>Description: {{ accessory.description }}</span>
                            <span>Ingredients: {{ accessory.materials.join(', ') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.1/axios.min.js" integrity="sha512-NbjaUHU8g0+Y8tMcRtIz0irSU3MjLlEdCvp82MqciVF4R2Ru/eaXHDjNSOvS6EfhRYbmQHuznp/ghbUvcC0NVw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="main.js"></script>
</body>

</html>