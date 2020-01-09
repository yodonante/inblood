const donacion = {
    state: {
        guardarInicio: 0,
        guardarformularioBasico: 0,
        guardarFormularioExamenFisico: 0,
        guardarFormularioHemograma: 0,
        guardarFormularioEntrevista: 0,
        guardarFormularioDonacion: 0,
    },
    mutations: {
        guardarFormulario(state,formulario){
            if(formulario == 0){
                state.guardarInicio++;
            }else{
                if (formulario == 1) {
                    state.guardarformularioBasico++;
                } else {
                    if (formulario == 2) {
                        state.guardarFormularioExamenFisico++;
                    } else {
                        if (formulario == 3) {
                            state.guardarFormularioHemograma++;
                        } else {
                            if (formulario == 4) {
                                state.guardarFormularioEntrevista++;
                            } else {
                                if (formulario == 5) {
                                    state.guardarFormularioDonacion++;
                                }
                            }
                        }
                    }
                }
            }
        },
    },
    actions: {
      
    }
}

export default donacion;