const forms = {
    state: {
        modalUsuario : false,
        usuario :{},
        modalPermiso : false,
        permiso :[],
        modalContacto : false,
        contacto :{},
        modalTarea : false,
        tarea :{},
        modalMensajeria : false,
        contactosMensajeria :{},
    },
    mutations: {
        mostrarOcultarModalUsuario(state,usuario){
            if(state.modalUsuario==false){
                state.modalUsuario = true;
                state.usuario = usuario;
            }else{
                state.modalUsuario = false;
                state.usuario = {};
            }
        },
        mostrarOcultarModalPermiso(state,permiso){
            if(state.modalPermiso==false){
                state.modalPermiso = true;
                state.permiso = permiso;
            }else{
                state.modalPermiso = false;
            }
        },
        mostrarOcultarModalContacto(state,contacto){
            if(state.modalContacto==false){
                state.modalContacto = true;
                state.contacto = contacto;
            }else{
                state.modalContacto = false;
                state.contacto = {};
            }
        },
        mostrarOcultarModalTarea(state,tarea){
            if(state.modalTarea==false){
                state.modalTarea = true;
                state.tarea = tarea;
            }else{
                state.modalTarea = false;
                state.tarea = {};
            }
        },
        mostrarOcultarModalMensajeria(state,contactosMensajeria){
            if(state.modalMensajeria==false){
                state.modalMensajeria = true;
                state.contactosMensajeria = contactosMensajeria;
            }else{
                state.modalMensajeria = false;
                state.contactosMensajeria = {};
            }
        },
        
    },
    actions: {
      
    }
}

export default forms;