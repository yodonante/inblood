const filtroContacto = {
    state: {
        filtros: [{email: ''},{sangre: ''},{factor: ''},{distrito: ''},{sexo: ''}],
        filtrosChange : 1
    },
    mutations: {
        agregarFiltro(state,filtroRecibido = []){
            //array filtroRecibido 0: indice; 1: valor
            var indice = "";
            for (let i = 0; i < state.filtros.length; i++) {
                indice = Object.keys(state.filtros[i]);
                if(indice == filtroRecibido[0]) {
                    state.filtros[i][indice] = filtroRecibido[1];
                }
            }
            state.filtrosChange ++;
        },

        quitarFiltro(state, filtroRecibido = []){
            var indice = "";
            for (let i = 0; i < state.filtros.length; i++) {
                indice = Object.keys(state.filtros[i]);
                if(indice == filtroRecibido["indice"]) {
                    state.filtros[i][indice] = "";
                }
            }
            state.filtrosChange ++;
        }
    },
    actions: {
      
    }
}

export default filtroContacto;