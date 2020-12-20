<template>
    <div class="container">
        <div class="input-group mb-3">
            <input v-model="query" type="text" id="p-search" class="form-control" placeholder="buscar por nombre o descripción"
                   aria-label="Nombre o descripción"
                   aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" @click="searchProducts" @keyup.enter="searchProducts" type="button">
                    Buscar
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Searchbar",
        data() {
            return {
                query: '',
            }
        },
        watch: {
            query: {
                handler: _.debounce(function () {
                    this.searchProducts()
                }, 800)
            }
        },
        methods: {
            searchProducts() {
                this.$store.dispatch('SEARCH_PRODUCTS', this.query)
            }
        }

    }
</script>
<style scoped>
@media (max-width: 480px) {
    .btn {
        margin-bottom: 0;
    }
}
</style>
