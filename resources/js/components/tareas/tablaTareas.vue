<template>
  <v-app>
    <v-card flat>
      <v-card-title>
        <el-button
          @click="mostrarCompletadas()"
          type="warning"
          icon="el-icon-view"
          plain
          v-show="tareaCompletadaSiNo == 0"
        >Viendo tareas no completadas</el-button>
        <el-button
          @click="mostrarCompletadas()"
          type="success"
          icon="el-icon-view"
          plain
          v-show="tareaCompletadaSiNo == 1"
        >Viendo tareas completadas</el-button>
        <el-button
          @click="mostrarModalTarea('store')"
          type="success"
          icon="el-icon-circle-plus-outline"
          plain
        >Nuevo</el-button>
        <v-spacer></v-spacer>
        <v-text-field v-model="search" append-icon="search" label="Buscar" single-line hide-details></v-text-field>
      </v-card-title>
      <v-data-table
        v-model="selected"
        :headers="headers"
        :items="todasTareas"
        item-key="id"
        select-all
        :search="search"
        :pagination.sync="paginacion"
        rows-per-page-text="Usuarios por página"
        :rows-per-page-items='[10,25,50,{"text":"Todos","value":-1}]'
      >
        <template slot="headers" slot-scope="props">
          <tr>
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
          <td class="text-xs-center" v-show="props.item.estado == tareaCompletadaSiNo">
            <el-button type="success" icon="el-icon-check" circle size="mini" v-if="props.item.estado == '1'" @click="editar(props.item)"></el-button>
            <el-button type="warning" icon="el-icon-minus" circle size="mini" v-else @click="editar(props.item)"></el-button>
          </td>
          <td class="text-xs-center" v-text="props.item.nombre" v-show="props.item.estado == tareaCompletadaSiNo" :style="diferenciaFechas(props.item.vencimiento) ? 'color:red' : 'color:black'"></td>
          <td class="text-xs-center" v-text="props.item.vencimiento" v-show="props.item.estado == tareaCompletadaSiNo" :style="diferenciaFechas(props.item.vencimiento) ? 'color:red' : 'color:black'"></td>
          <td class="text-xs-center" v-text="props.item.descripcion" v-show="props.item.estado == tareaCompletadaSiNo" :style="diferenciaFechas(props.item.vencimiento) ? 'color:red' : 'color:black'"></td>
          <td class="text-xs-center" v-show="props.item.estado == tareaCompletadaSiNo" :style="diferenciaFechas(props.item.vencimiento) ? 'color:red' : 'color:black'">
            <v-btn
              flat
              icon
              color="yellow accent-4"
              @click="mostrarModalTarea('update',props.item)"
              class="modal-trigger"
            >
              <v-icon>edit</v-icon>
            </v-btn>
            <v-btn
              flat
              icon
              color="red accent-2"
              @click="eliminar(props.item)"
              class="modal-trigger"
            >
              <v-icon>delete</v-icon>
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
import moment from "moment";

export default {
  name: "tablaTareas",
  components: {

  },
  data() {
    return {
      search: "",
      selected: [],
      todasTareas: [{id:1,nombre:"Jhonatan Alexander Malara Santa Cruz"}],
      headers: [
        {
          text: "Completado",
          align: "left",
          sortable: true,
          value: "nombre",
        },
        {
          text: "Tareas",
          align: "left",
          sortable: true,
          value: "tarea",
        },
        {
          text: "Fecha de vencimiento",
          align: "left",
          sortable: true,
          value: "vencimiento",
        },
        {
          text: "Descripción",
          align: "left",
          sortable: true,
          value: "descripcion",
        },
        {
          text: "Opciones",
          align: "left",
          sortable: true,
          value: "opciones",
        },
      ],
      paginacion: {
        sortBy: "nombre"
      },
      nombreTarea: "",
      tareaCompletadaSiNo: 0,
    };
  },

  created: function() {
    this.listar();
  },

  computed: mapState({
    modalTareaGlobal: state => state.forms.modalTarea,
  }),

  watch: {
    modalTareaGlobal() {
      this.listar();
    },
  },

  methods: {
    ...mapMutations(["mostrarOcultarModalTarea"]),
    
    mostrarModalTarea: function(criterio, tarea = []) {
      this.mostrarOcultarModalTarea(tarea);
    },

    listar: function() {
      let me = this;
      var url = "/tarea/mostrarPorPersona";
      axios.get(url).then(response => {
        me.todasTareas = response.data;
      });
    },

    mostrarCompletadas : function () {
      console.log(1)
      if (this.tareaCompletadaSiNo == 0) {
        this.tareaCompletadaSiNo = 1;
      }else{
        this.tareaCompletadaSiNo = 0;
      }
    },

    editar : function (tarea) {
      let me = this;
      const fd = new FormData();
      var nuevoEstado = 1;
      if(tarea.estado==1){
        nuevoEstado = 0;
      }else{
        nuevoEstado = 1;
      }
      fd.append("id", tarea.id);
      fd.append("nombre", tarea.nombre);
      fd.append("descripcion", tarea.descripcion);
      fd.append("vencimiento", tarea.vencimiento);
      fd.append("estado", nuevoEstado);
      axios
      .post("/tarea/editar", fd)
      .then(function(response) {
        if (response.data == "Ok") {
          if(tarea.estado == '0'){
            me.$notify({
              title: "Tarea completada",
              message: "La tarea fue movida a tareas realizadas.",
              type: "success"
            });
          }else{
            me.$notify({
              title: "Movido a tareas por realizar",
              message: "La tarea fue movida a tareas por realizar.",
              type: "success"
            });
          }
          me.listar();
        } else {
          me.$notify.error({
            title: "Error al cambiar de estado a la tarea.",
            message: "Vuelve a intentar cambiar de estado la tarea."
          });
        }
      })
      .catch(function(error) {
        console.log(error);
        me.$notify.error({
          title: "Error al cambiar de estado a la tarea.",
          message: "Contacta a nuestro equipo técnico."
        });
      });
    },
    
    diferenciaFechas(fecha){
      var hoy = moment();
      var fechaVencimiento = moment(fecha);
      if (hoy.diff(fechaVencimiento) > 0) {
        return true;
      }else{
        return false;
      }
    },

    eliminar : function (tarea) {
      let me = this;
      me.$confirm(
        "¿Estás seguro de eliminar la tarea?",
        "Warning",
        {
          confirmButtonText: "Aceptar",
          cancelButtonText: "Cancelar",
          type: "warning"
        }
      )
      .then(() => {
        const fd = new FormData();
        fd.append("id", tarea.id);
        axios
        .post("/tarea/eliminar", fd)
        .then(function(response) {
          if (response.data == "Ok") {
            me.$notify({
              title: "Tarea eliminada",
              message: "La tarea fue eliminada.",
              type: "success"
            });
            me.listar();
          } else {
            me.$notify.error({
              title: "Error al eliminar la tarea.",
              message: "Vuelve a intentar eliminar la tarea."
            });
          }
        })
        .catch(function(error) {
          console.log(error);
          me.$notify.error({
            title: "Error al eliminar la tarea.",
            message: "Contacta a nuestro equipo técnico."
          });
        });
      })
      .catch(() => {
        me.$message({
          type: "info",
          message: "Se canceló la eliminación de la tarea"
        });
      });
    }
  }
};
</script>
