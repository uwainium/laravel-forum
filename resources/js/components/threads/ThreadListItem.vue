<template>
    <a class="list-group-item" href="/" v-if="thread">
        <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{thread.title}}</h5>
            <small></small>
        </div>
        <small>{{thread.created}}</small>
    </a>
</template>

<script>
    export default {
        props: [
            "id"
        ],

        data() {
            return {
                thread: undefined
            }
        },

        created() {
            this.fetch();
        },

        methods: {
            fetch() {
                axios.all([
                    axios.get('/api/threads/' + this.id)
                ])
                .then(axios.spread((thread) => {
                    this.thread = JSON.parse(thread.data);
                }));
            }
        }
    }
</script>
