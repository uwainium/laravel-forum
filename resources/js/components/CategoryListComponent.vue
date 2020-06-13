<template>
    <div>
        <div class="list-group">
            <a v-for="category in categories" class="list-group-item" href="/">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{category.title}}</h5>
                    <small></small>
                </div>
                <p class="mb-1">{{category.description}}</p>
                <small>{{category.created}}</small>
            </a>
        </div>

        <div class="list-group">
            <a v-for="thread in threads" class="list-group-item" href="/">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{thread.title}}</h5>
                    <small></small>
                </div>
                <p class="mb-1"></p>
                <small>{{thread.created}}</small>
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            "parent"
        ],

        data() {
            return {
                categories: [],
                threads: []
            }
        },

        mounted() {
            axios.all([
                axios.get('/api/categories?parent=' + this.parent),
                axios.get('/api/threads?parent=' + this.parent)
            ])
            .then(axios.spread((categories, threads) => {
                this.categories = JSON.parse(categories.data);
                this.threads = JSON.parse(threads.data);
            }));
        }
    }
</script>
