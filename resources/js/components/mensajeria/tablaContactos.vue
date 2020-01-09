<template>
  <v-app>
    <v-card flat>
      <v-toolbar dark :color="variables.menuColor" class="elevation-1">
        <v-toolbar-title class="white--text" v-text="mensajeriaDatos[0].nombre"></v-toolbar-title>
      </v-toolbar>
      <v-card-title>
        <!-- <el-button @click="eliminarVarios()" type="danger" icon="el-icon-delete" plain>Eliminar contactos de la lista</el-button> -->
        <el-button
          @click="enviarMensajeVarios()"
          type="success"
          icon="el-icon-message"
          plain
        >Enviar mensajes</el-button>
        <v-spacer></v-spacer>
        <v-text-field v-model="search" append-icon="search" label="Buscar" single-line hide-details></v-text-field>
      </v-card-title>
      <v-data-table
        v-model="selected"
        :headers="headers"
        :items="todosContactos"
        item-key="id"
        select-all
        :search="search"
        :pagination.sync="paginacion"
        rows-per-page-text="Usuarios por página"
        :rows-per-page-items="[10,25,50,{'text':'Todos','value':-1}]"
      >
        <template slot="headers" slot-scope="props">
          <tr>
            <th>
              <v-checkbox
                :input-value="props.all"
                :indeterminate="props.indeterminate"
                primary
                hide-details
                @click.native="toggleAll"
              ></v-checkbox>
            </th>
            <th
              v-for="header in props.headers"
              :key="header.text"
              :class="['column sortable', paginacion.descending ? 'desc' : 'asc', header.value === paginacion.sortBy ? 'active' : '']"
              @click="changeSort(header.value)"
            >
              <v-icon small>arrow_upward</v-icon>
              {{ header.text }}
            </th>
          </tr>
        </template>
        <template slot="items" slot-scope="props">
          <td>
            <v-checkbox v-model="props.selected" primary hide-details></v-checkbox>
          </td>
          <td class="text-xs-center" v-text="props.item.id"></td>
          <td class="text-xs-center" v-text="props.item.nombre"></td>
          <td class="text-xs-center" v-text="props.item.apellido"></td>
          <td class="text-xs-center" v-text="props.item.celular"></td>
          <td
            class="text-xs-center"
            v-text="props.item.sangre"
            v-if="props.item.sangre == 'Desconocido'"
          ></td>
          <td class="text-xs-center">
            <v-btn
              flat
              icon
              color="green accent-4"
              @click="enviarMensajeIndividual(props.item)"
              class="modal-trigger"
            >
              <v-icon>fas fa-envelope</v-icon>
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
import { mapState, mapMutations } from "vuex";
import variables from "../../../sass/variables.scss";

export default {
  name: "tablaContactosMensajeria",
  components: {},
  data() {
    return {
      search: "",
      selected: [],
      todosContactos: [],
      headers: [
        {
          text: "ID",
          align: "center",
          sortable: true,
          value: "id"
        },
        {
          text: "Nombre",
          align: "center",
          sortable: true,
          value: "nombre"
        },
        {
          text: "Apellido",
          align: "center",
          sortable: true,
          value: "apellido"
        },
        {
          text: "Celular",
          align: "center",
          sortable: true,
          value: "celular"
        },
        {
          text: "Enviar",
          align: "center",
          sortable: false,
          value: "enviar"
        }
      ],
      mensajeriaDatos: [],
      paginacion: {
        sortBy: "nombre"
      }
    };
  },

  created: function() {
    this.listar();
  },

  computed: mapState({
    contactosMensajeria: state => state.mensajeria.contactosMensajeria,
    variables() {
      return variables;
    }
  }),

  watch: {
    contactosMensajeria() {
      this.listar();
    }
  },

  methods: {
    listar: function() {
      this.mensajeriaDatos = this.contactosMensajeria;
      this.todosContactos = this.mensajeriaDatos[1];
    },

    /*eliminarVarios: function(contactos) {
      let me = this;
      me.$confirm(
        "¿Estás seguro de borrar de esta mensajería a los contactos seleccionados?",
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
              if (response.data == "Ok") {
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
    },*/

    enviarMensajeIndividual(contacto) {
      this.$prompt("Escribe el mensaje a enviarle a este contacto", "Mensaje", {
        confirmButtonText: "Enviar",
        cancelButtonText: "Cancelar"
      })
        .then(({ value }) => {
          var url = "https://wa.me/51" + contacto.celular + "?text=";
          var url = url + value;
          window.open(url, "_blank");

          this.$message({
            type: "success",
            message: "Mensaje enviado con éxito"
          });
        })
        .catch(() => {
          this.$message({
            type: "info",
            message: "Envío cancelado"
          });
        });
    },

    enviarMensajeVarios: function() {
      if (this.selected.length != 0) {
        this.$prompt(
          "<i>Puedes usar @ para colocar el nombre del contacto en el mensaje.</i>",
          "Escribe el mensaje a enviar.",
          {
            dangerouslyUseHTMLString: true
          },
          {
            confirmButtonText: "Enviar",
            cancelButtonText: "Cancelar"
          }
        )
          .then(({ value }) => {
            if (this.selected.length != 0) {
              for (var i = 0; i < this.selected.length; i++) {
                var url =
                  "https://wa.me/" + this.selected[i].celular + "?text=";
                var mensaje = this.prepararMsj(value, this.selected[i].nombre);
                var url = url + mensaje;
                window.open(url, "_blank");
              }

              this.$message({
                type: "success",
                message: "Mensaje enviado con éxito"
              });
            } else {
              this.$message({
                type: "warning",
                message:
                  "Debes seleccionar los contactos a los que le enviarás el mensaje"
              });
            }
          })
          .catch(() => {
            this.$message({
              type: "info",
              message: "Envío cancelado o no escribiste el mensaje."
            });
          });
      } else {
        this.$message({
          type: "warning",
          message:
            "Debes seleccionar al menos 1 contacto para enviar mensajes múltiples."
        });
      }
    },

    prepararMsj: function(mensajeSinPreparar, nombreContacto) {
      var mensajePreparado = "";
      var i;
      for (i = 0; i < mensajeSinPreparar.length + 1; i++) {
        if (mensajeSinPreparar.substring(i, i + 1) == " ") {
          mensajePreparado += "%20";
        } else {
          if (mensajeSinPreparar.substring(i, i + 1) == "@") {
            mensajePreparado += nombreContacto;
          } else {
            if (mensajeSinPreparar.substring(i, i + 1) != "@") {
              mensajePreparado += mensajeSinPreparar.substring(i, i + 1);
            }
          }
        }
      }
      return mensajePreparado;
    },

    columnValueList(val) {
      return this.todosContactos.map(d => d[val]);
    },

    toggleAll() {
      if (this.selected.length) this.selected = [];
      else this.selected = this.todosContactos.slice();
    },

    changeSort(column) {
      if (this.paginacion.sortBy === column) {
        this.paginacion.descending = !this.paginacion.descending;
      } else {
        this.paginacion.sortBy = column;
        this.paginacion.descending = false;
      }
    }
  }
};
</script>

