<template>
  <v-app>
    <v-card flat>
      <v-card-title>
        <el-button
          @click="mostrarModalPermiso('store')"
          type="success"
          icon="el-icon-circle-plus-outline"
          plain
        >Nuevo</el-button>
        <el-button @click="eliminarVarios()" type="danger" icon="el-icon-delete" plain>Eliminar</el-button>
        <modalPermisos></modalPermisos>
        <v-spacer></v-spacer>
        <v-text-field v-model="search" append-icon="search" label="Buscar" single-line hide-details></v-text-field>
      </v-card-title>
      <v-data-table
        v-model="selected"
        :headers="headers"
        :items="todosPermisos"
        item-key="id"
        select-all
        :search="search"
        rows-per-page-text="Usuarios por página"
      >
        <template slot="items" slot-scope="props">
          <td>
            <v-checkbox v-model="props.selected" primary hide-details></v-checkbox>
          </td>
          <td class="text-xs-left">{{ props.item.id }}</td>
          <td class="text-xs-left">{{ props.item.name }}</td>
          <td class="text-xs-left">{{ props.item.created_at }}</td>
          <td class="text-xs-center">
            <v-btn
              flat
              icon
              color="yellow accent-4"
              @click="mostrarModalPermiso('update',props.item)"
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
import modalPermisos from "./modalPermisos.vue";
import { mapMutations } from "vuex";
import { mapState } from "vuex";
export default {
components: {modalPermisos},
  data() {
    return {
      search: "",
      selected: [],
      todosPermisos: [],
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
          text: "Fecha de creación",
          align: "left",
          sortable: true,
          value: "created_at"
        },
        {
          text: "Permisos",
          align: "center",
          sortable: false,
          value: "permiso"
        }
      ]
    };
  },

  created: function() {
    this.listar();
  },

  computed: mapState({
    modalPermisos: state => state.forms.modalPermisos
    // Es otra forma de llamar a un State de Vuex:
    // countPlusLocalState : function (state) {
    //     console.log(state.forms.modalUsuario)
    // }
  }),

  methods: {
    ...mapMutations(["mostrarOcultarModalPermiso"]),
    mostrarModalPermiso: function(criterio, usuario = []) {
      this.mostrarOcultarModalPermiso(usuario);
    },

    listar: function() {
      let me = this;
      var url = "/rol/listar";
      axios.get(url).then(response => {
        me.todosPermisos = response.data;
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
          fd.append("roles", JSON.stringify(me.selected));
          axios
            .post("/rol/eliminarvarios", fd)
            .then(function(response) {
              if (response.data=="Ok") {
                me.$message({
                  type: "success",
                  message: "Los roles fueron eliminados"
                });
              } else {
                me.$notify.error({
                  title: "Error  al eliminar el rol",
                  message: "Vuelve a intentar eliminar el rol."
                });
                console.log(response.data);
              }
              me.listar();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la eliminación del rol",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        })
        .catch(() => {
          me.$message({
            type: "info",
            message: "Se canceló la eliminación de los roles"
          });
        });
    },
  }
};
</script>
