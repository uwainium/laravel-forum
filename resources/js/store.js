import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        auth_status: '',
        user: {},
        loading: false,
    },
    mutations: {
        auth_request(state) {
            state.auth_status = 'loading';
        },
        auth_success(state) {
            state.auth_status = 'success';
        },
        auth_error(state) {
            state.auth_status = 'error';
        },
        auth_logout(state) {
            state.auth_status = '';
        },
        set_user(state, user) {
            state.user = user;
        },
        set_loading(state, show) {
            state.loading = show;
        }
    },
    actions: {
        login({commit, dispatch}, user){
            return new Promise((resolve, reject) => {
                commit('auth_request');
                dispatch('showLoading');
                axios.get('/sanctum/csrf-cookie').then((response) => {
                    axios.post('/login', user).then(response => {
                        dispatch('checkLogin');
                        resolve(response);
                    }).catch(err => {
                        dispatch('hideLoading');
                        commit('auth_error');
                        reject(err);
                    })
                });
            });
        },
        logout({commit}) {
            return new Promise((resolve, reject) => {
                commit('auth_request');
                axios.post('/logout').then(response => {
                    commit('auth_logout');
                    resolve(response);
                }).catch(err => {
                    commit('auth_error');
                    reject(err);
                })
            });
        },
        checkLogin({commit, dispatch}) {
            return new Promise((resolve, reject) => {
                commit('auth_request');
                axios.get('/api/user').then(response => {
                    dispatch('hideLoading');
                    commit('auth_success');
                    commit('set_user', response.data);
                    resolve(response);
                }).catch(err => {
                    dispatch('hideLoading');
                    commit('auth_error');
                    reject(err);
                })
            });
        },
        showLoading({commit}) {
            commit('set_loading', true);
        },
        hideLoading({commit}) {
            commit('set_loading', false);
        }
    },
    getters: {
        auth_status: state => state.auth_status,
        user: state => state.user,
        loading: state => state.loading,
    }
})
