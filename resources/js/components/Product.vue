<template>
    <div class="card" @click="getSupplier(product.user_id, product.id)">
        <img class="card-img-top" :src="product.image" :alt="product.name">
        <div class="card-body">
            <h5 class="card-title">{{product.name}}</h5>
            <p class="card-text">{{product.description}}</p>
        </div>
        </a>
    </div>
</template>

<script>
    export default {
        name: "Product",
        props: ['product'],
        methods: {
          getSupplier(user_id, product_id) {
            window.location = '/supplier-products/'+user_id+"/"+product_id;
          }}
    }
</script>

<style scoped>
    .card {
        cursor: pointer;
        margin-bottom: 8px;
    }
</style>
