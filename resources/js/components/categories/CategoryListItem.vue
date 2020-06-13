<template>
    <router-link class="list-group-item" v-if="category" :to="{name: 'category', params: {parent: category.id}}">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{category.title}}</h5>
            <small>{{category.threadCount}} threads</small>
        </div>
        <p class="mb-1">{{category.description}}</p>
        <small>{{category.created}}</small>
    </router-link>
</template>

<script>
    export default {
        props: [
            "category"
        ],
    }
</script>
