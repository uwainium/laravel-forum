<template>
    <span>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#create-category-modal">
            Create Category
        </button>

        <!-- Modal -->
        <div class="modal fade" id="create-category-modal" tabindex="-1" role="dialog" aria-labelledby="create-header" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create-header">Create Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="category-title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="category-title" name="title" v-model="title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="category-description" class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="category-description" name="description" v-model="description">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" v-on:click="submit">Add Category</button>
                    </div>
                </div>
            </div>
        </div>
    </span>
</template>

<script>
    export default {
        props: [
            "parent",
        ],

        data() {
            return {
                "title": "",
                "description": ""
            }
        },

        mounted() {

        },

        methods: {
            submit: function() {
                const data = new FormData();
                data.append('title', this.title);
                data.append('description', this.description);
                $('#create-category-modal').modal('hide');

                this.$store.dispatch('showLoading');
                axios.post('/api/categories', data).then((response) => {
                    this.$store.dispatch('hideLoading');
                    this.$emit('updateList');
                });
            }
        }
    }
</script>
