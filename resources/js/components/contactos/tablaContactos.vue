<template>
  <v-app>
    <v-card flat>
      <v-card-title>
        <el-button
          @click="mostrarModalContacto('store')"
          type="success"
          icon="el-icon-circle-plus-outline"
          plain
        >Nuevo</el-button>
        <el-button @click="eliminarVarios()" type="danger" icon="el-icon-delete" plain>Eliminar</el-button>
        <botonfiltro :filtros="filtroList" style="margin-left:10px"></botonfiltro>
        <botonimportar style="margin-left:10px"></botonimportar>
        <el-button
          @click="mostrarModalMensajeria('store',selected)"
          type="success"
          icon="el-icon-circle-plus-outline"
          plain
          style="margin-left:10px"
        >Crear mensajerias</el-button>
        <modalContactos></modalContactos>
        <modalMensajeria></modalMensajeria>
        <v-spacer></v-spacer>
        <v-text-field v-model="search" append-icon="search" label="Buscar" single-line hide-details></v-text-field>
      </v-card-title>
      <tagfiltro :filtros="filtrosGlobal" style="margin-left:20px"></tagfiltro>
      <v-data-table
        v-model="selected"
        :headers="headers"
        :items="filtrarContactos"
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
          <td class="text-xs-center">
            <router-link :to="'/contactos/'+props.item.persona_id" v-text="props.item.nombre"></router-link>
          </td>
          <td class="text-xs-center">
            <router-link :to="'/contactos/'+props.item.persona_id" v-text="props.item.apellido"></router-link>
          </td>
          <td
            class="text-xs-center"
            v-text="props.item.sangre"
            v-if="props.item.sangre == 'Desconocido'"
          ></td>
          <td class="text-xs-center" v-text="props.item.sangre + props.item.factor" v-else></td>
          <td class="text-xs-center" v-text="props.item.distrito"></td>
          <td class="text-xs-center" v-text="props.item.celular"></td>
          <td class="text-xs-center" v-text="props.item.fecha_ultima_donacion"></td>
          <td class="text-xs-center" v-text="props.item.fecha_proxima_donacion"></td>
          <td class="text-xs-center" v-text="props.item.inbound_estados"></td>
          <td class="text-xs-center">
            <el-row>
              <el-col :sm="12">
                <v-btn
                  flat
                  icon
                  color="yellow accent-4"
                  @click="mostrarModalContacto('update',props.item)"
                  class="modal-trigger"
                >
                  <v-icon>edit</v-icon>
                </v-btn>
              </el-col>
              <el-col :sm="12">
                <v-btn
                  flat
                  icon
                  color="green accent-4"
                  @click="enviarMensajeIndividual(props.item)"
                  class="modal-trigger"
                >
                  <v-icon>fas fa-envelope</v-icon>
                </v-btn>
              </el-col>
            </el-row>
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
import modalContactos from "./modalContactos";
import modalMensajeria from "../mensajeria/modalMensajeria";
import tagfiltro from "./tag";
import botonfiltro from "./button-filtro";
import botonimportar from "./button-import";
import { mapState, mapMutations } from "vuex";

export default {
  name: "tablaContactos",
  components: {
    modalContactos,
    modalMensajeria,
    tagfiltro,
    botonfiltro,
    botonimportar
  },
  data() {
    return {
      search: "",
      selected: [],
      todosContactos: [],
      headers: [
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
          text: "T.Sangre",
          align: "center",
          sortable: true,
          value: "tsangre"
        },
        {
          text: "Ubicación",
          align: "center",
          sortable: true,
          value: "ubicacion"
        },
        {
          text: "DNI",
          align: "center",
          sortable: true,
          value: "dni"
        },
        {
          text: "Ult. donación",
          align: "center",
          sortable: true,
          value: "ultimaDonacion"
        },
        {
          text: "Prox. donación",
          align: "center",
          sortable: true,
          value: "proximaDonacion"
        },
        {
          text: "Estado",
          align: "center",
          sortable: true,
          value: "estadoInbound"
        },
        {
          text: "Opciones",
          align: "center",
          sortable: false,
          value: "opciones"
        }
      ],
      filtroSelected: [],
      paginacion: {
        sortBy: "nombre"
      },
      filtroList: [
        { id: "1", nombre: "email" },
        { id: "2", nombre: "sangre" },
        { id: "3", nombre: "factor" },
        { id: "4", nombre: "distrito" },
        { id: "5", nombre: "sexo" }
      ],
      filtros: {
        email: [],
        sangre: [],
        factor: [],
        distrito: [],
        sexo: []
      },
      filtrosTag: []
    };
  },

  created: function() {
    this.listar();
    this.listarFiltros();
  },

  computed: mapState({
    filtrosGlobal: state => state.filtroContacto.filtros,
    filtrosChange: state => state.filtroContacto.filtrosChange,
    modalContactoGlobal: state => state.forms.modalContacto,

    filtradoDeContactos() {
      return this.todosContactos.filter(contacto => {
        return Object.keys(this.filtros).every(f => {
          return (
            this.filtros[f].length < 1 || this.filtros[f].includes(contacto[f])
          );
        });
      });
    },

    filtrarContactos() {
      return this.todosContactos.filter(contacto => {
        return Object.keys(this.filtros).every(f => {
          return (
            this.filtros[f].length < 1 || this.filtros[f].includes(contacto[f])
          );
        });
      });
    }
  }),

  watch: {
    modalContactoGlobal() {
      this.listar();
    },
    filtrosChange() {
      for (let i = 0; i < this.filtrosGlobal.length; i++) {
        var indice = Object.keys(this.filtrosGlobal[i]);
        this.filtros[indice] = this.filtrosGlobal[i][indice];
      }
    }
  },

  methods: {
    ...mapMutations([
      "mostrarOcultarModalContacto",
      "mostrarOcultarModalMensajeria"
    ]),

    mostrarModalContacto: function(criterio, contacto = []) {
      this.mostrarOcultarModalContacto(contacto);
    },

    mostrarModalMensajeria: function(criterio, contactos = []) {
      if (this.selected.length != 0) {
        this.mostrarOcultarModalMensajeria(contactos);
      } else {
        this.$message({
          type: "warning",
          message:
            "Debes seleccionar al menos 1 contacto para crear una Lista de mensajería."
        });
      }
    },

    listar: function() {
      let me = this;
      var url = "/persona/listarDonantes";
      axios.get(url).then(response => {
        me.todosContactos = response.data;
      });
    },

    listarFiltros: function() {
      let me = this;
      var url = "/campo/listar";
      axios.get(url).then(response => {
        // me.filtroList = response.data;
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
    },

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

