<template>
    <b-navbar>
        <b-container>
            <b-navbar-brand to="/">APP NAME</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav>
                    <b-nav-item to="/category">Forums</b-nav-item>
                </b-navbar-nav>

                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">

                    <li class="nav-item" v-if="!loggedIn">
                        <login-component></login-component>
                    </li>
                    <li class="nav-item" v-if="!loggedIn">
                        <a class="nav-link" href="">Register</a>
                    </li>


                    <b-nav-item-dropdown right v-if="loggedIn" v-bind:text="user.username">
                        <b-dropdown-item @click="logout">Logout</b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>
            </b-collapse>
        </b-container>
    </b-navbar>
</template>

<script>
    import LoginComponent from "../../js/components/LoginComponent";
    export default {
        components: {LoginComponent},

        mounted() {
            this.$store.dispatch('showLoading');
            this.$store.dispatch('checkLogin');
        },

        computed: {
            loggedIn: function() {
                return this.$store.getters.auth_status === 'success';
            },
            user: function() {
                return this.$store.getters.user;
            },
        },
        methods: {
            logout: function() {
                this.$store.dispatch('logout');
            }
        }
    }
</script>
