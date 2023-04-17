<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Shop</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="app">
        <header>
            <h1>Zoolandia</h1>
        </header>

        <div class="container">
            <h2>Food for your pets</h2>
            <div class="foods">
                <div v-for="food in products.foods">
                    <div class="product-card">
                        <img :src="food.image" alt="">
                        <h4>{{ food.brand }}: {{ food.name }}</h4>
                        <span>Remaining quantity: {{ food.quantity }}</span>
                        <span>Pack weight - dimensions: {{ food.dimensions }}</span>
                        <span>Description: {{ food.description }}</span>
                        <span>Ingredients: {{ food.ingredients }}</span>
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