
/**
 * Primero, cargaremos el framework Vue.
 */

require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue';

/**
 * Cargaremos Element UI que es quien provee los estilos básicos de la web
 */
import ElementUI from 'element-ui';
import locale from 'element-ui/lib/locale/lang/es'
import 'element-ui/lib/theme-chalk/index.css';
import Router from 'vue-router';
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import store from './Store/store';
/**
 * Importaremos los íconos. Usaremos fontawesome-free como proveedor
 */

import '@fortawesome/fontawesome-free/css/all.css'

/**
 * Inicializaremos las variables declaradas.
 * Dentro de ellas está Vue-Router que es quien controlará el enrutamiento entre las vistas
 */
Vue.use(ElementUI, { locale })
Vue.use(Router);
Vue.use(Vuetify);

/**
 * Vistas:
 */

import dashboard from './views/Dashboard/dashboard'
import contactos from './views/Contactos/contactos'
import tareas from './views/Tareas/tareas'
import mensajeria from './views/Mensajeria/mensajeria'
import usuarios from './views/Usuarios/usuarios'
import permisos from './views/Permisos/permisos'
import perfil from './views/Perfil/perfil'
import donacion from './views/Donacion/donacion'

/**
 * Componentes:
 */
import sidebar from './components/sidebar/sidebar.vue'
import navbar from './components/navbar/navbar.vue'
import registro from './components/registro-publico/registro-donante.vue'
import agendador from './components/registro-publico/agendador.vue'
import registroVoluntarios from './components/voluntarios/registro.vue'
/*
import tablausuarios from './components/tablaUsuarios/usuarios.vue'
*/
/**
 * Rutas:
 */

let router = new Router({
    routes:[
        {
            path: '/',
            component: dashboard
        },
        {
            path: '/usuarios',
            component: usuarios
        },
        {
            path: '/contactos',
            component: contactos
        },
        {
            path: '/mensajeria',
            component: mensajeria
        },
        {
            path: '/tareas',
            component: tareas
        },
        {
            path: '/permisos',
            component: permisos
        },
        {
            path: '/contactos/:idContacto',
            component: perfil,
            props: true
        },
        {
            path: '/donacion',
            component: donacion
        },
        // {
        //     path: '/finanzas',
        //     component: finanzas,
        //     children: [
        //         {   path: 'modalIngresos',
        //             component: modalIngresos,
        //             name: 'modalIngresos',
        //             meta: {
        //                 showModal: true
        //             }
        //         }
        //     ]
        // }
    ]
});

const app = new Vue({
    el: '#app',
    router,
    store,
    components:{
        sidebar,
        navbar,
        registro,
        agendador,
        registroVoluntarios
    },
    
});
