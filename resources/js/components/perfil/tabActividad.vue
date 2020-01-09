<template>
  <el-tabs v-model="activeName" @tab-click="handleClick">
    <el-tab-pane label="Notas" name="first">
        <slotNotas></slotNotas>
    </el-tab-pane>
    <el-tab-pane label="Donación" name="second">
      <tabDonacion></tabDonacion>
    </el-tab-pane>
    <el-tab-pane label="Citas" name="third">
      <slotCita/>
    </el-tab-pane>
    <el-tab-pane label="Llamada" name="fourth">
      <slotLlamadas :contacto="contacto" :datos="datos"></slotLlamadas>
    </el-tab-pane>
    <el-tab-pane label="Correo" name="five">
      <slotCorreo :contacto="contacto" :dato_correo_id="dato_correo_id"></slotCorreo>
    </el-tab-pane>
  </el-tabs>
</template>
<script>
import slotNotas from "./nota/slotNotas";
import slotLlamadas from "./llamada/slotLlamadas";
import slotCorreo from "./correo/slotCorreo";
import slotCita from "./cita/slotCita";
import tabDonacion from "./donacion/tabDonacion";
  export default {
      props:{
        contacto:{},
        datos:Array,
        dato_correo_id:'',
      },
    components: {
        slotNotas,
        slotLlamadas,
        slotCorreo,
        tabDonacion,
        slotCita
    },
    
    data() {
      return {
        activeName: 'first',
      };
    },
    methods: {
      handleClick(tab, event) {
        //console.log(tab, event);
      }
    }
  };
</script>