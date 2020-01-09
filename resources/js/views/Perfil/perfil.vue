<template>
  <el-row :gutter="10">
    <el-col :sm="6">
      <el-card class="box-card" shadow="hover" style="max-height: 90vh;overflow-y: auto !important;">
        <el-row :justify="'center'">
          <el-col>
            <fotoPerfil style="display: block;margin:auto" v-if="contacto.sexo == 1"
            :image="'/img/boy.png'" :height="'100px'" :width="'100px'">
              <div>{{ $route.params.idContacto }}</div>
            </fotoPerfil>
            <fotoPerfil style="display: block;margin:auto" v-else
            :image="'/img/girl.png'" :height="'100px'" :width="'100px'">
              <div>{{ $route.params.idContacto }}</div>
            </fotoPerfil>
          </el-col>
        </el-row>
        <tarjetaDatos :contacto="contacto" style="margin-top:14px;"></tarjetaDatos>
      </el-card>
    </el-col>
    <el-col :sm="18">
      <el-card class="box-card" shadow="hover" style="max-height: 90vh;overflow-y: auto !important;">
        <tabActividad :contacto="contacto" :datos="datos" :dato_correo_id="dato_correo_id"></tabActividad>
      </el-card>
    </el-col>
  </el-row>
</template>

<script>
import tarjetaDatos from "../../components/perfil/tarjetaDatos";
import tabActividad from "../../components/perfil/tabActividad";
import fotoPerfil from "../../components/perfil/fotoPerfil";
import { mapState, mapMutations } from "vuex";

export default {
  components: {
    tarjetaDatos,
    tabActividad,
    fotoPerfil,
  },
  data() {
    return {
      contacto_id: this.$route.params.idContacto,
      datos: [],
      contacto:{},
      dato_correo_id:'',
    };
  },
  created: function () {
    this.buscarPersona();
  },
  computed: mapState({
    perfilGlobal: state => state.forms.personaPerfil,
  }),

  methods:{
    ...mapMutations(["cambiarPersonaPerfil"]),
    guardarPerfilGlobal: function(perfil = []) {
      this.cambiarPersonaPerfil(perfil);
    },

    buscarPersona: function () {
      let me = this;
      const fd = new FormData();
      fd.append("id", me.contacto_id);
      axios
        .post("/persona/mostrar", fd)
        .then(function(response) {
          me.datos = response.data[1];
          me.contacto = response.data[0][0];
          me.dato_correo_id = response.data[1][1].id;
        })
        .catch(function(error) {
          console.log(error);
        });
    }
  }
};
</script>
