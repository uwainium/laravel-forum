<template>
    <span>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-light" data-toggle="modal" data-target="#create-post-modal">
            Create Post
        </button>

        <!-- Modal -->
        <div class="modal fade" id="create-post-modal" tabindex="-1" role="dialog" aria-labelledby="create-header" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="create-header">Create Post</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group row">
                                <label for="input-title" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-title">
                                </div>
                            </div>
                            <ckeditor :editor="editor" v-model="editorData" :config="editorConfig"></ckeditor>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Add Post</button>
                    </div>
                </div>
            </div>
        </div>
    </span>
</template>

<script>
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

    export default {
        props: [
            "parent",
        ],

        data() {
            return {
                editor: ClassicEditor,
                editorData: '',
                editorConfig: {
                    // The configuration of the editor.
                }
            };
        },

        mounted() {

        }
    }
</script>
