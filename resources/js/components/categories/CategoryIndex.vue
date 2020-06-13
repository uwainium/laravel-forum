<template>
    <div>
        <category-create v-on:updateList="fetch"></category-create> <post-create></post-create>
        <hr>
        <transition-group class="list-group" tag="div" name="category-transition">
            <category-list-item v-for="category in categories" v-bind:data="category" v-bind:key="category.id" :category="category"></category-list-item>
        </transition-group>
        <hr>
        <div class="list-group">
            <thread-list-item v-for="thread in threads" v-bind:data="thread" v-bind:key="thread.id" :id="thread.id"></thread-list-item>
        </div>
    </div>
</template>

<style>
    .category-transition-enter-active {
        transition: all .3s ease;
    }
    .category-transition-leave-active {
        transition: all .3s ease;
    }
    .category-transition-enter, .category-transition-leave-to
        /* .category-transition-leave-active below version 2.1.8 */ {
        color: transparent;
    }
</style>

<script>
    import CategoryListItem from "./CategoryListItem";
    import ThreadListItem from "../threads/ThreadListItem";
    import CategoryCreate from "./CategoryCreate";
    import PostCreate from "../posts/PostCreate";
    export default {
        components: {PostCreate, CategoryCreate, ThreadListItem, CategoryListItem},
        props: [
            "parent"
        ],

        data() {
            return {
                categories: [],
                threads: [],
            }
        },

        beforeRouteEnter(to, from, next) {
            next(vm => {
                vm.fetch(vm.parent);
            });
        },

        beforeRouteUpdate(to, from, next) {

            this.categories = [];
            this.threads = [];
            this.fetch(to.params.parent).then(next);
        },

        methods: {
            fetch (parent) {
                return new Promise((resolve, reject) => {
                    this.$store.dispatch('showLoading');
                    if(!parent) {
                        parent = 0;
                    }
                    axios.all([
                        axios.get('/api/categories?parent=' + parent),
                        axios.get('/api/threads?parent=' + parent)
                    ])
                    .then(axios.spread((categories, threads) => {
                        this.categories = JSON.parse(categories.data);
                        this.threads = JSON.parse(threads.data);
                        this.$store.dispatch('hideLoading');
                        resolve();
                    }));
                });

            }
        }
    }
</script>
