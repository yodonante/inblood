<template>
  <el-row>
    <el-col :span="24">
      <el-col :xs="24" :sm="24">
        <el-card shadow="never">
          <h3>Lista de mensajería</h3>
        </el-card>
      </el-col>
      <el-col :xs="24" :sm="24">
        <el-menu default-active="2" class="el-menu-vertical-demo lista-mensajeria">
          <el-menu-item
            v-for="mensajeria in todasMensajerias"
            :key="mensajeria.id"
            @click="mostrarContactos(mensajeria.id); mensajeriaSeleccionada=mensajeria"
          >
            <el-col :xs="18" :sm="18">
              <i
                class="fas fa-users"
                :style="mensajeria == mensajeriaSeleccionada? 'color:#3c8ddf':''"
              ></i>
              <span
                v-text="mensajeria.nombre"
                :style="mensajeria == mensajeriaSeleccionada? 'color:#3c8ddf;font-weight: bold;':''"
              ></span>
            </el-col>
            <el-col :xs="6" :sm="6">
              <v-btn
                flat
                icon
                color="red accent-1"
                @click="eliminarMensajeria(mensajeria.id)"
                class="modal-trigger"
              >
                <v-icon>fas fa-trash</v-icon>
              </v-btn>
            </el-col>
          </el-menu-item>
        </el-menu>
      </el-col>
    </el-col>
  </el-row>
</template>
<script>
import { mapState, mapMutations } from "vuex";
export default {
  data() {
    return {
      todasMensajerias: [],
      listaContactos: [],
      index: 0,
      mensajeriaSeleccionada: []
    };
  },
  created: function() {
    this.listar();
  },

  methods: {
    ...mapMutations(["cambiarContactoGlobal"]),

    contactoGlobal: function(contacto = []) {
      this.cambiarContactoGlobal(contacto);
    },

    listar: function() {
      let me = this;
      var url = "/mensajeria/listar";
      axios.get(url).then(response => {
        me.todasMensajerias = response.data;
        if (me.index == 0) {
          me.mostrarContactos(me.todasMensajerias[0]["id"]);
          me.mensajeriaSeleccionada = me.todasMensajerias[0];
        }
        me.index++;
      });
    },

    mostrarContactos: function(id) {
      let me = this;
      const fd = new FormData();
      fd.append("id", id);
      axios
        .post("/mensajeria/mostrar", fd)
        .then(function(response) {
          me.contactoGlobal(response.data);
        })
        .catch(function(error) {
          console.log(error);
          //   me.$notify.error({
          //     title: "Error al listar contactos de la mensajería",
          //     message: "Contacta a nuestro equipo técnico."
          //   });
        });
    },

    eliminarMensajeria: function(id) {
      let me = this;
      const fd = new FormData();
      fd.append("id", id);
      axios
        .post("/mensajeria/eliminar", fd)
        .then(function(response) {
          me.listar();
          if (me.todasMensajerias.length != 0) {
            me.mostrarContactos(me.todasMensajerias[0]["id"]);
            me.mensajeriaSeleccionada = me.todasMensajerias[0];
          }
        })
        .catch(function(error) {
          console.log(error);
          me.$notify.error({
            title: "Error al eliminar mensajería",
            message: "Contacta a nuestro equipo técnico."
          });
        });
    }
  }
};
</script>

<style>
.lista-mensajeria {
  width: auto !important;
  overflow-y: auto !important;
  height: 80vh;
}

.v-btn .v-btn__content .v-icon {
  font-size: 18px;
}
</style>

