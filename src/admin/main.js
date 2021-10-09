import Vue from "vue";
import App from "./App.vue"
import router from './router'

window.onload = () => {

    new Vue({
        el: '#sup_client',
        router,
        render: h => h(App)
    })
}