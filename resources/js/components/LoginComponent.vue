<template>
    <span>
        <b-button v-b-modal.login-modal>Login</b-button>

        <b-modal id="login-modal" title="Login" ok-title="Login" @ok="login">
            <form method="POST" action="">

                <div class="form-group row">
                    <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                    <div class="col-md-6">
                        <input id="username" type="text" class="form-control" name="username" required autocomplete="username" autofocus v-model="username">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required autocomplete="current-password" v-model="password">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">

                            <label class="form-check-label" for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <a class="btn btn-link" href="">
                    Forgot Your Password?
                </a>
            </form>
        </b-modal>
    </span>

</template>

<script>
    export default {
        props: [
            "parent",
        ],

        data() {
            return {
                "username": "",
                "password": "",
                "error": ""
            }
        },

        mounted() {

        },

        methods: {
            login: function() {
                let username = this.username;
                let password = this.password;

                this.$store.dispatch('login', {username, password}).then(() => {
                    $('#login-modal').modal('hide');
                }).catch((err) => {
                    console.log(err);
                })
            }
        }
    }
</script>

