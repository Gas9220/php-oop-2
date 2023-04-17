const { createApp } = Vue

createApp({
    data() {
        return {
            products: {
                foods: [],
                accessories: []
            }
        }
    },
    methods: {
        fetchProducts() {
            axios.get('server.php')
                .then((response) => {
                    this.products.foods = response.data[0][1]
                    this.products.accessories = response.data[1][1]
                    console.log(response.data);
                    console.log(this.products.foods);
                    console.log(this.products.accessories);
                })
        }
    },
    created() {
        this.fetchProducts()
    }
}).mount('#app')