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
        },
        checkProductCompatibility(pet) {
            console.log("Valore iniziale", pet)
            let petIcon = 'non toccato'
            switch (pet) {
                case 'Cat':
                    petIcon = "fa-solid fa-cat";
                    break;
                case 'Dog':
                    petIcon = "fa-solid fa-dog"
                    break;
                case 'Bird':
                    petIcon = "fa-solid fa-crow"
                    break;
                default:
                    break;
            }

            console.log(petIcon)
            return petIcon;
        }
    },
    created() {
        this.fetchProducts()
    }
}).mount('#app')