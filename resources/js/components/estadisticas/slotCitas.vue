<template>
  <el-row style="padding:20px">
    <h2>CITAS</h2>
    <el-row style="margin-bottom:20px;margin-top:20px">
      <el-col :md="12" :xs="24">
        <p>Escoge la fecha de la que visualizarás las citas:</p>
      </el-col>
      <el-col :md="12" :xs="24">
        <el-date-picker v-model="fecha" @blur="listar()" type="date" placeholder="Escoge la fecha"></el-date-picker>
      </el-col>
    </el-row>
    <!---->
    <el-row v-for="cita in todasCitas" :key="cita.id">
      <el-row>
        <el-col :span="8" style="font-size:18px">
          <b>
            <span v-text="cita.hora"></span>
          </b>
        </el-col>
        <el-col style="margin-top:5px;color:grey;font-size:14px;text-align: right;" :span="16">
          <span style="margin-right:20px;"
          ><router-link style="color:grey;" :to="'/contactos/'+cita.persona_id" v-text="cita.nombre + ' ' + cita.apellido + ' - DNI:' + cita.dni"></router-link></span>
        </el-col>
      </el-row>
      <el-divider></el-divider>
    </el-row>
    <!---->
  </el-row>
</template>

<script>
import moment from "moment";
export default {
  data() {
    return {
      todasCitas: [],
      fecha: moment()
    };
  },

  created: function() {
    this.listar();
  },

  methods: {
    listar: function() {
      let me = this;
      const fd = new FormData();
      fd.append("fecha", moment(me.fecha).format("YYYY-MM-DD"));
      axios
        .post("/cita/mostrarPorFecha", fd)
        .then(function(response) {
          me.todasCitas = response.data;
        })
        .catch(function(error) {
          console.log(error);
        });
    },

    convertirFecha(fecha) {
      moment.locale("es");
      return moment(fecha).format("LLLL");
    }
  }
};
</script>
