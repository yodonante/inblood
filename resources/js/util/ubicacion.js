async function getDepartamentos() {
    var url = '/ubicacion/departamentos';
    var data;
    await axios.get(url).then(response => {
        data = response.data;
    });
    return data;
}

async function getProvincias(departamento) {
    var url = '/ubicacion/provincias';
    var data;
    var departamento_id = "";
    /*
     El siguiente if es necesario porque la base de datos no reconoce el departamento_id 
     ya que empieza con 0 y por tanto, en vez de recoocer por ej: 06000, solo reconoce el 6000,
     así que lo concatenamos con un 0 a todos los ids que son menores de 100000 (Revisar BD)
     */
     if(departamento < 100000){
        departamento_id = '0' + departamento;
    }else{
        departamento_id = departamento;
    }
    
//    departamento_id = departamento;
    const fd = new FormData();
    fd.append('departamento_id', departamento_id);
    await axios.post(url, fd
    ).then(function (response) {
        data = response.data;
    }).catch(function (error) {
        console.log(error);
    });
    return data;
}

async function getDistritos(provincia) {
    var url = '/ubicacion/distritos';
    var data;
    var provincia_id = "";
    /*
     El siguiente if es necesario porque la base de datos no reconoce el provincia_id 
     ya que empieza con 0 y por tanto, en vez de recoocer por ej: 06000, solo reconoce el 6000,
     así que lo concatenamos con un 0 a todos los ids que son menores de 100000 (Revisar BD)
     */
    if(provincia < 100000){
        provincia_id = '0' + provincia;
    }else{
        provincia_id = provincia;
    }
    
//    provincia_id = provincia;
    const fd = new FormData();
    fd.append('provincia_id', provincia_id);
    await axios.post(url, fd).then(function (response) {
        data = response.data;
    }).catch(function (error) {
        console.log(error);
    });
    return data;
}

export default { getDepartamentos, getProvincias, getDistritos };