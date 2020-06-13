<template>
    <transition name="fade">
        <div v-if="loading" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; background-color: rgba(0,0,0,0.5); z-index: 9999">
            <div class="loader"></div>
        </div>
    </transition>
</template>

<style>
    .loader {
        position: absolute;
        top: 50%;
        left: 50%;
        border: 16px solid #f3f3f3; /* Light grey */
        border-top: 16px solid #555; /* Blue */
        border-radius: 50%;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        margin: -60px 0 0 -60px;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>

<script>
    export default {
        computed: {
            loading: function () {
                return this.$store.getters.loading;
            }
        }
    }
</script>
