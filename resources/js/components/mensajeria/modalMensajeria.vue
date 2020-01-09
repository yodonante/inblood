<template>
  <div>
    <el-dialog
      :visible.sync="modalMensajeria"
      :title="titulo"
      width="30%"
      :show-close="false"
    >
      <el-form
        label-position="right"
        :rules="reglas"
        ref="formMensajeria"
        class="formMensajeria"
        :model="formMensajeria"
      >
        <el-row>
          <el-col :md="24" :xs="24">
            <el-form-item label="Nombre" :label-width="formLabelWidth" prop="nombre">
              <el-input
                v-model="formMensajeria.nombre"
                autocomplete="off"
                :disabled="titulo=='Editar usuario'"
              >
              </el-input>
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
      <span slot="footer" class="dialog-footer">
        <el-button @click="mostrarOcultarModalMensajeria">Cancelar</el-button>
        <el-button
          type="primary"
          @click="guardar('formMensajeria')"
        >Crear mensajería</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import moment from "moment";

export default {
  name: "modalMensajeria",
  introduction: "Formulario de Mensajería",
  description:
    "Formulario que permite la creación mensajerías. Todos los campos son obligatorios.",
  token: "<modalMensajerias></modalMensajerias>",
  data() {
    return {
      formMensajeria: {
        nombre: "",
      },
      formLabelWidth: "100px",
      titulo: "",
      reglas: {
        nombre: [
          {
            required: true,
            message: "Coloca el nombre de la mensajeria",
            trigger: "blur"
          },
          { min: 3, max:250, message: 'La mensajeria debe tener entre 3 y 250 caracteres', trigger: 'blur' }
        ],
      },
    };
  },
  computed: mapState({
    modalMensajeria: state => state.forms.modalMensajeria,
    contactosMensajeriaGlobal: state => state.forms.contactosMensajeria
  }),

  watch: {
    contactosMensajeriaGlobal() {
      if (this.modalMensajeria == true) {
        this.mostrarModalMensajeria();
      }
    }
  },

  methods: {
    ...mapMutations(["mostrarOcultarModalMensajeria"]),

    mostrarModalMensajeria() {
        this.titulo = "Nueva Mensajeria";
        this.formMensajeria.nombre = "";
    },

    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("nombre", me.formMensajeria.nombre);
          fd.append("personas", JSON.stringify(me.contactosMensajeriaGlobal));
          axios
            .post("/mensajeria/crear", fd)
            .then(function(response) {
                console.log(response.data)
              if (response.data == "Ok") {
                me.$notify({
                  title: "La mensajería fue creada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al crear la mensajería",
                  message: "Vuelve a intentar crear la mensajería."
                });
              }
              me.mostrarOcultarModalMensajeria();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la creación de la mensajería",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        } else {
          return false;
        }
      });
    },

/*    editar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("id", me.contactosMensajeriaGlobal.id);
          fd.append("nombre", me.formMensajeria.nombre);
          fd.append("vencimiento", moment(me.formMensajeria.vencimiento).format("YYYY-MM-DD hh:mm:ss"));
          fd.append("descripcion", me.formMensajeria.descripcion);
          fd.append("estado", me.contactosMensajeriaGlobal.estado);
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
              me.mostrarOcultarModalMensajeria();
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
    },*/
  }
};
</script>