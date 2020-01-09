<template>
    <el-row :gutter="20">
        <el-col :xs="24" :sm="6">
            <listaMensajeria></listaMensajeria>
        </el-col>
        <el-col :xs="24" :sm="18">
            <tablaContactos></tablaContactos>
        </el-col>
    </el-row>
</template>

<script>
import tablaContactos from '../../components/mensajeria/tablaContactos'
import listaMensajeria from '../../components/mensajeria/listaMensajeria'

export default {
    components : {
        tablaContactos,
        listaMensajeria,
    },
    data () {
        return {

        };
    },
}
</script> 
