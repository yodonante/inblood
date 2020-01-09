<template>
  <el-row style="padding:20px">
    <el-row style="margin-bottom:20px">
      <el-button
        @click="abrirModal('Nuevo')"
        icon="el-icon-circle-plus-outline"
        type="success"
        size="small"
        round
      >Crear</el-button>
    </el-row>
    <!---->
    <el-row v-for="nota in todasNotas" :key="nota.id">
      <el-row>
        <el-col :span="24" style="font-size:16px">
          <span v-text="nota.descripcion"></span>
        </el-col>
        <el-col style="margin-top:5px;color:grey;font-size:14px;text-align: right;" :span="24">
          <span v-text="'Creado: ' + convertirFecha(nota.created_at)" style="margin-right:20px"></span>
          <span v-text="'Editado por última vez: ' + convertirFecha(nota.updated_at)"></span>
        </el-col>
        <el-col :span="24">
          <el-button
            @click="abrirModal('Editar',nota)"
            type="warning"
            icon="el-icon-edit"
            size="mini"
            round
          >Editar</el-button>
          <el-button
            @click="eliminar(nota.id)"
            icon="el-icon-delete"
            type="danger"
            size="mini"
            round
          >Eliminar</el-button>
        </el-col>
      </el-row>
      <el-divider></el-divider>
    </el-row>
    <!---->
    <el-dialog :visible.sync="modalNota" :title="titulo" width="33%" :show-close="false">
      <el-form
        label-position="right"
        :rules="reglas"
        ref="formNota"
        class="formNota"
        :model="formNota"
      >
        <el-row>
          <el-col :md="24" :xs="24">
            <el-form-item label="Descripción" label-width="100px" prop="descripcion">
              <el-input
                type="textarea"
                v-model="formNota.descripcion"
                autocomplete="off"
                :autosize="{ minRows: 2, maxRows: 4}"
              />
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
      <span slot="footer" class="dialog-footer">
        <el-button @click="modalNota=false">Cancelar</el-button>
        <el-button
          type="primary"
          @click="guardar('formNota');modalNota=false"
          v-if="titulo=='Nueva nota'"
        >Crear nota</el-button>
        <el-button type="primary" @click="editar('formNota');modalNota=false" v-else>Editar nota</el-button>
      </span>
    </el-dialog>
  </el-row>
</template>

<script>
import moment from 'moment';
export default {
  data() {
    return {
      modalNota: false,
      titulo: "",
      todasNotas: [],
      formNota: { id: "", descripcion: "" },
      persona: {},
      reglas: {
        descripcion: [
          {
            required: true,
            message: "Coloca la descripción de la nota",
            trigger: "blur"
          }
          // { min: 4, max:250, message: 'El contacto debe tener entre 5 y 250 caracteres', trigger: 'blur' }
        ]
      }
    };
  },

  created: function() {
    this.listar();
  },

  methods: {
    abrirModal: function(tipo, nota) {
      this.modalNota = true;
      if (tipo == "Editar") {
        this.titulo = "Editar nota";
        this.formNota.id = nota.id;
        this.formNota.descripcion = nota.descripcion;
      } else {
        this.titulo = "Nueva nota";
        this.descripcion = ""
      }
    },

    listar: function() {
      let me = this;
      const fd = new FormData();
      fd.append("persona_id", this.$route.params.idContacto);
      axios
        .post("/nota/mostrar", fd)
        .then(function(response) {
          me.todasNotas = response.data;
        })
        .catch(function(error) {
          console.log(error);
        });
    },

    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("persona_id", this.$route.params.idContacto);
          fd.append("descripcion", this.formNota.descripcion);
          axios
            .post("/nota/crear", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Nota creada",
                  message: "La nota fue creada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al crear la nota",
                  message: "Vuelve a intentar crear la nota."
                });
              }
              me.listar();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la creación de la nota",
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
          fd.append("id", this.formNota.id);
          fd.append("descripcion", this.formNota.descripcion);
          axios
            .post("/nota/editar", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Nota editada",
                  message: "La nota fue editada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al editar la nota",
                  message: "Vuelve a intentar editar la nota."
                });
              }
              me.listar();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la editada de la nota",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        } else {
          return false;
        }
      });
    },

    eliminar: function(id) {
      let me = this;
      me.$confirm(
        "¿Estás seguro de eliminar la nota seleccionadas?",
        "Warning",
        {
          confirmButtonText: "Aceptar",
          cancelButtonText: "Cancelar",
          type: "warning"
        }
      )
        .then(() => {
          const fd = new FormData();
          fd.append("id", id);
          axios
            .post("/nota/eliminar", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Nota eliminada",
                  message: "La nota fue eliminada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al eliminar la nota",
                  message: "Vuelve a intentar eliminar la nota."
                });
              }
              me.listar();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la eliminar de la nota",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        })
        .catch(() => {
          me.$message({
            type: "info",
            message: "Se canceló la eliminación de las notas"
          });
        });
    },

    convertirFecha(fecha){
      moment.locale("es");
      return moment(fecha).format('LLLL');
    }
  }
};
</script>
