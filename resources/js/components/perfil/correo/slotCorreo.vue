<template>
  <el-row style="padding:20px">
    <el-row style="margin-bottom:20px">
      <el-button
        @click="abrirModal('Nuevo')"
        icon="el-icon-message"
        type="success"
        size="small"
        round
      >Nuevo correo</el-button>
    </el-row>
    <!---->
    <el-row v-for="correo in todosCorreos" :key="correo.id">
      <el-row>
        <el-col :span="24" style="font-size:16px">
          <h3 v-text="correo.asunto"></h3>
        </el-col>
        <el-col :span="24" style="font-size:16px">
          <span v-text="correo.mensaje"></span>
        </el-col>
        <el-col style="margin-top:5px;color:grey;font-size:14px;text-align: right;" :span="24">
          <span v-text="'Enviado el: ' + convertirFecha(correo.created_at)" style="margin-right:20px"></span>
        </el-col>
        <el-col :span="24">
          <el-button
            @click="eliminar(correo.id)"
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
    <el-dialog :visible.sync="modalCorreo" :title="titulo" width="33%" :show-close="false">
      <el-form
        label-position="right"
        :rules="reglas"
        ref="formCorreo"
        class="formCorreo"
        :model="formCorreo"
      >
        <el-row>
            <el-col :md="24" :xs="24">
            <el-form-item label="Asunto" label-width="100px" prop="asunto">
              <el-input
                v-model="formCorreo.asunto"
                autocomplete="off"
              />
            </el-form-item>
          </el-col>
          <el-col :md="24" :xs="24">
            <el-form-item label="Mensaje" label-width="100px" prop="mensaje">
              <el-input
                type="textarea"
                v-model="formCorreo.mensaje"
                autocomplete="off"
                :autosize="{ minRows: 2, maxRows: 4}"
              />
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
      <span slot="footer" class="dialog-footer">
        <el-button @click="modalCorreo=false">Cancelar</el-button>
        <el-button
          type="primary"
          @click="guardar('formCorreo');modalCorreo=false"
          v-if="titulo=='Nuevo correo'"
        >Enviar correo</el-button>
      </span>
    </el-dialog>
  </el-row>
</template>

<script>
import moment from 'moment';
export default {
    props:{
        contacto:{},
        dato_correo_id:'',
    },
  data() {
    return {
      modalCorreo: false,
      titulo: "",
      todosCorreos: [],
      formCorreo: { id: "", asunto: "", mensaje:"" },
      persona: {},
      reglas: {
        asunto: [
          {
            required: true,
            message: "Coloca la descripción de la nota",
            trigger: "blur"
          }
        ],
        mensaje: [
          {
            required: true,
            message: "Coloca la descripción de la nota",
            trigger: "blur"
          }
        ]
      }
    };
  },
  
  watch:{
    contacto(){
      this.listar();
    }
  },

  methods: {
    abrirModal: function(tipo, nota) {
      this.modalCorreo = true;
      if (tipo == "Editar") {
        this.titulo = "Editar nota";
        this.formCorreo.id = nota.id;
        this.formCorreo.descripcion = nota.descripcion;
      } else {
        this.titulo = "Nuevo correo";
        this.descripcion = ""
      }
    },

    listar: function() {
      let me = this;
      const fd = new FormData();
      fd.append("contacto_id", me.dato_correo_id);//deberá ir el dato_id del correo, no el persona_id
      axios
        .post("/mail/listar", fd)
        .then(function(response) {
          me.todosCorreos = response.data;
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
          fd.append("contactos", this.contacto.email);
          fd.append("asunto", this.formCorreo.asunto);
          fd.append("mensaje", this.formCorreo.mensaje);
          fd.append("nombre", this.contacto.nombre);
          axios
            .post("/mail/enviar", fd)
            .then(function(response) {
              console.log(response.data);
              if (response.data == "Ok") {
                me.$notify({
                  title: "correo enviado",
                  message: "El correo fue enviado con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al enviar el correo",
                  message: "Vuelve a intentar enviarlo."
                });
              }
              me.listar();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en el envío del correo",
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
        "¿Estás seguro de eliminar el correo seleccionado?",
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
            .post("/mail/eliminar", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Correo eliminado",
                  message: "La correo fue eliminado con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al eliminar el correo",
                  message: "Vuelve a intentar eliminar el correo."
                });
              }
              me.listar();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la eliminar de la correo",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        })
        .catch(() => {
          me.$message({
            type: "info",
            message: "Se canceló la eliminación del correo"
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
