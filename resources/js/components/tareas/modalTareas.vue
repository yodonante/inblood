<template>
  <div>
    <el-dialog
      :visible.sync="modalTarea"
      :title="titulo"
      width="75%"
      fullscreen
      :show-close="false"
    >
      <el-form
        label-position="right"
        :rules="reglas"
        ref="formTarea"
        class="formTarea"
        :model="formTarea"
      >
        <el-row>
          <el-col :md="12" :xs="24">
            <el-form-item label="Nombre" :label-width="formLabelWidth" prop="nombre">
              <el-input
                v-model="formTarea.nombre"
                autocomplete="off"
                :disabled="titulo=='Editar usuario'"
              >
              </el-input>
            </el-form-item>
          </el-col>
          <el-col :md="12" :xs="24">
            <el-form-item label="Vencimiento" :label-width="formLabelWidth" prop="vencimiento">
              <el-date-picker
                v-model="formTarea.vencimiento"
                type="datetime"
                placeholder="Fecha de vencimiento"
                default-time="12:00:00">
            </el-date-picker>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
            <el-col :md="24" :xs="24">
                <el-form-item label="Descripción" :label-width="formLabelWidth" prop="descripcion">
                    <el-input v-model="formTarea.descripcion" placeholder="Agregar una descripción o comentario" :autosize="{ minRows: 2, maxRows: 4}" type="textarea">
                    </el-input>
                </el-form-item>
            </el-col>
        </el-row>
      </el-form>
      <span slot="footer" class="dialog-footer">
        <el-button @click="mostrarOcultarModalTarea">Cancelar</el-button>
        <el-button
          type="primary"
          @click="guardar('formTarea')"
          v-if="titulo=='Nuevo tarea'"
        >Crear tarea</el-button>
        <el-button type="primary" @click="editar('formTarea')" v-else>Editar tarea</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import moment from "moment";

export default {
  name: "modalTareas",
  introduction: "Formulario de tareas",
  description:
    "Formulario que permite la creación y edición de tareas. Todos los campos son obligatorios.",
  token: "<modalTareas></modalTareas>",
  data() {
    return {
      formTarea: {
        nombre: "",
        descripcion: "",
        vencimiento: "",
      },
      formLabelWidth: "100px",
      titulo: "",
      roles: [],
      sexoList: [
        { id: "0", nombre: "Femenino" },
        { id: "1", nombre: "Masculino" }
      ],
      reglas: {
        nombre: [
          {
            required: true,
            message: "Coloca el nombre de la tarea",
            trigger: "blur"
          },
          { min: 3, max:250, message: 'La tarea debe tener entre 3 y 250 caracteres', trigger: 'blur' }
        ],
        descripcion: [
          {
            required: true,
            message: "Describe la tarea que realizarás",
            trigger: "blur"
          },
          { min: 3, max:1000, message: 'La descripción debe tener entre 3 y 1000 caracteres', trigger: 'blur' }
        ],
        vencimiento: [
          {
            required: true,
            message: "Debes colocar la fecha de vencimiento de la tarea",
            trigger: "blur"
          },
        ],
      },
    };
  },
  computed: mapState({
    modalTarea: state => state.forms.modalTarea,
    tareaGlobal: state => state.forms.tarea
  }),

  watch: {
    tareaGlobal() {
      if (this.modalTarea == true) {
        this.mostrarModalTarea();
      }
    }
  },

  methods: {
    ...mapMutations(["mostrarOcultarModalTarea"]),

    mostrarModalTarea() {
      if (this.tareaGlobal.length == 0) {
        this.titulo = "Nuevo tarea";
        this.formTarea.nombre = "";
        this.formTarea.descripcion = "";
        this.formTarea.vencimiento = "";
      } else {
        this.titulo = "Editar tarea";
        this.formTarea.nombre = this.tareaGlobal.nombre;
        this.formTarea.descripcion = this.tareaGlobal.descripcion;
        this.formTarea.vencimiento = this.tareaGlobal.vencimiento;
      }
    },

    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("nombre", me.formTarea.nombre);
          fd.append("vencimiento", moment(me.formTarea.vencimiento).format("YYYY-MM-DD"));
          fd.append("descripcion", me.formTarea.descripcion);
          fd.append("estado", '0');
          axios
            .post("/tarea/crear", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "La tarea fue creada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al crear la tarea",
                  message: "Vuelve a intentar crear la tarea."
                });
              }
              me.mostrarOcultarModalTarea();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la creación de la tarea",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        } else {
          return false;
        }
      });
    },

    editar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("id", me.tareaGlobal.id);
          fd.append("nombre", me.formTarea.nombre);
          fd.append("vencimiento", moment(me.formTarea.vencimiento).format("YYYY-MM-DD hh:mm:ss"));
          fd.append("descripcion", me.formTarea.descripcion);
          fd.append("estado", me.tareaGlobal.estado);
          axios
            .post("/tarea/editar", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "La tarea fue editada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al editar la tarea",
                  message: "Vuelve a intentar editar la tarea."
                });
              }
              me.mostrarOcultarModalTarea();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la edición de la tarea",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        } else {
          return false;
        }
      });
    },
  }
};
</script>