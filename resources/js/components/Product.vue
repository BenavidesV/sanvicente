<template>
    <div class="card">
        <img class="card-img-top" :src="product.image" :alt="product.name">
        <div class="card-body">
            <h5 class="card-title">{{product.name}}</h5>
            <p class="card-text">{{product.description}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Product",
        props: ['product']
    }
</script>

<style scoped>
    .card {
        cursor: pointer;
        margin-bottom: 8px;
    }
</style>
