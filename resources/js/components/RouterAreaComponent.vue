<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <transition name="slide-fade">
                    <router-view></router-view>
                </transition>
            </div>
        </div>
    </div>
</template>

<style>
    .slide-fade-enter-active {
        transition: all .3s ease;
    }
    .slide-fade-leave-active {
        transition: all .3s ease;
    }
    .slide-fade-enter, .slide-fade-leave-to
        /* .slide-fade-leave-active below version 2.1.8 */ {
        transform: translateX(10px);
        opacity: 0;
    }
</style>

<script>
    export default {

    }
</script>
