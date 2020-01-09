<template>
  <v-app>
    <v-card flat>
      <v-card-title>
        <el-button
          @click="mostrarModalUsuarios('store')"
          type="success"
          icon="el-icon-circle-plus-outline"
          plain
        >Nuevo</el-button>
        <el-button
          @click="eliminarVarios()"
          type="danger"
          icon="el-icon-delete"
          plain
        >Eliminar</el-button>
        <modalUsuarios></modalUsuarios>
        <v-spacer></v-spacer>
        <v-text-field v-model="search" append-icon="search" label="Buscar" single-line hide-details></v-text-field>
      </v-card-title>
      <v-data-table
        v-model="selected"
        :headers="headers"
        :items="todosUsuarios"
        item-key="id"
        select-all
        :search="search"
        rows-per-page-text="Usuarios por página"
      >
        <template slot="items" slot-scope="props">
          <td>
            <v-checkbox v-model="props.selected" primary hide-details></v-checkbox>
          </td>
          <td class="text-xs-left" v-text="props.item.id"></td>
          <td class="text-xs-left" v-text="props.item.nombre+' '+props.item.apellido"></td>
          <td class="text-xs-left" v-text="props.item.email"></td>
          <td class="text-xs-left" v-text="props.item.rol"></td>
          <td class="text-xs-center">
            <v-btn
              flat
              icon
              color="yellow accent-4"
              @click="mostrarModalUsuarios('update',props.item)"
              class="modal-trigger"
            >
              <v-icon>edit</v-icon>
            </v-btn>
          </td>
        </template>
        <v-alert
          slot="no-results"
          :value="true"
          color="red lighten-2"
          icon="warning"
        >No encontramos "{{ search }}" que buscabas.</v-alert>
      </v-data-table>
    </v-card>
  </v-app>
</template>

<script>
import modalUsuarios from "./modalUsuarios.vue";
import { mapMutations } from "vuex";
import { mapState } from "vuex";
export default {
  name: "tablaUsuarios",
  components: {
    modalUsuarios
  },
  data() {
    return {
      search: "",
      selected: [],
      todosUsuarios: [],
      headers: [
        {
          text: "ID",
          align: "left",
          sortable: true,
          value: "id"
        },
        {
          text: "Nombre",
          align: "left",
          sortable: true,
          value: "nombre"
        },
        {
          text: "Email",
          align: "left",
          sortable: true,
          value: "email"
        },
        {
          text: "Rol",
          align: "left",
          sortable: true,
          value: "rol"
        },
        {
          text: "Editar",
          align: "center",
          sortable: false,
          value: "editar"
        }
      ]
    };
  },

  created: function() {
    this.listar();
  },

  watch: {
    modalUsuarioGlobal() {
      this.listar();
    }
  },

  computed: mapState({
    modalUsuarioGlobal: state => state.forms.modalUsuario
    // Es otra forma de llamar a un State de Vuex:
    // countPlusLocalState : function (state) {
    //     console.log(state.forms.modalUsuario)
    // }
  }),
  methods: {
    ...mapMutations(["mostrarOcultarModalUsuario"]),
    mostrarModalUsuarios: function(criterio, usuario = []) {
      this.mostrarOcultarModalUsuario(usuario);
    },

    listar: function() {
      let me = this;
      var url = "/persona/listar";
      axios.get(url).then(response => {
        me.todosUsuarios = response.data;
      });
    },

    eliminarVarios: function(contactos) {
      let me = this;
      me.$confirm(
        "¿Estás seguro de eliminar a los usuarios seleccionados?",
        "Warning",
        {
          confirmButtonText: "Aceptar",
          cancelButtonText: "Cancelar",
          type: "warning"
        }
      )
        .then(() => {
          const fd = new FormData();
          fd.append("usuarios", JSON.stringify(me.selected));
          axios
            .post("/persona/eliminarvarios", fd)
            .then(function(response) {
              if (response.data=="Ok") {
                me.$message({
                  type: "success",
                  message: "Los usuarios fueron eliminados"
                });
              } else {
                me.$notify.error({
                  title: "Error  al eliminar el usuario",
                  message: "Vuelve a intentar eliminar el usuario."
                });
              }
              me.listar();
              console.log(response.data)
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la edición del usuario",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        })
        .catch(() => {
          me.$message({
            type: "info",
            message: "Se canceló la eliminación de los usuarios"
          });
        });
    },
    
  }
};
</script>

