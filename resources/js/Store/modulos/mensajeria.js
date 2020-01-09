const mensajeria = {
    state: {
        contactosMensajeria : [],
    },
    mutations: {
        cambiarContactoGlobal(state, contactos){
            state.contactosMensajeria = contactos
        },
    },
    actions: {
      
    }
}

export default mensajeria;