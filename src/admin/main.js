import Vue from "vue";
import App from "./App.vue"
import router from './router'
import { apolloProvider } from './ApolloClient'




window.onload = () => {
    new Vue({
        el: '#sup_client',
        apolloProvider,
        router,
        render: h => h(App)
    })
}