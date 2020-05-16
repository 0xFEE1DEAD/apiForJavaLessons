import Vue from 'vue'
window.axios = require('axios');

import App from "./vuecomponents/App.vue";
import ElementUI from 'element-ui';

import Router from 'vue-router'
import Login from "./vuecomponents/Login.vue";
import Reg from "./vuecomponents/registration"

Vue.use(Router)

const router = new Router({
    routes: [
        {
            path: '/',
            component: Login,
            name: 'login'
        },
        {
            path: '/registration',
            component: Reg,
            name: 'registration'
        },
    ]
})

Vue.use(ElementUI);

const app = new Vue({
    el: "#app",
    render: h => h(App),
    router
});