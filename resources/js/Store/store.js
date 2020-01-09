import Vue from 'vue'
import Vuex from 'vuex'

/**
 * La librería de Vuex será utilizada separando las funciones a implementar en módulos.
 * En app irán todas las funciones que se ejecutarán a lo largo de la aplicación.
 * En forms irán todas las funciones que se ejecutarán en la interacción con formularios de tipo Modal
 */
import app from './modulos/app'
import forms from './modulos/forms'
import filtroContacto from './modulos/filtroContacto'
import getters from './getters'
import mensajeria from './modulos/mensajeria'
import donacion from './modulos/donacion'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    app,
    forms,
    filtroContacto,
    mensajeria,
    donacion,
  },
  getters
})

export default store
