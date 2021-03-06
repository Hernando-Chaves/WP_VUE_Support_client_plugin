import Vue from 'vue'
import Router from 'vue-router'
import Inicio from '../components/Inicio.vue'
import Tickets from '../components/tickets/Tickets.vue'
import Conocimiento from '../components/conocimiento/Conocimiento.vue'
import Videos from '../components/videos/Videos.vue'
import Correo from '../components/correo/Correo.vue'


Vue.use(Router)

const routes = [
    {
        path: '/',
        name: 'inicio',
        components: { default: Inicio }
    },
    {
        path: '/tickets',
        name: 'tickets',
        components: { default: Tickets }
    },
    {
        path: '/conocimiento',
        name: 'conocimiento',
        components: { default: Conocimiento }
    },
    {
        path: '/video-tutoriales',
        name: 'video-tutoriales',
        components: { default: Videos }
    },
    {
        path: '/mensaje-correo',
        name: 'mensaje-correo',
        components: { default: Correo }
    }
];

const router = new Router({
    routes
});

export default router;