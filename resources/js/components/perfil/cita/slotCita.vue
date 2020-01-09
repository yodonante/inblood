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
    <el-row v-for="cita in todasCitas" :key="cita.id">
      <el-row>
        <el-col :span="24" style="font-size:16px">
          <h3 v-text="cita.nombre"></h3>
        </el-col>
        <el-col :span="24" style="font-size:16px">
          <span style="font-size:14px" v-text="'Fecha de cita: ' + cita.fecha"></span>
          <span style="font-size:14px;margin-left:10px" v-text="'Hora de cita: ' + cita.hora"></span>
        </el-col>
        <el-col :span="24">
          <el-button
            @click="abrirModal('Editar',cita)"
            type="warning"
            icon="el-icon-edit"
            size="mini"
            round
          >Editar</el-button>
          <el-button
            @click="eliminar(cita.id)"
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
    <el-dialog :visible.sync="modalCita" :title="titulo" width="33%" :show-close="false">
      <el-form
        label-position="right"
        :rules="reglas"
        ref="formCita"
        class="formCita"
        :model="formCita"
      >
        <el-row>
          <el-col :md="24" :xs="24">
            <el-form-item label="Hora" :label-width="'100px'" prop="hora">
                <el-time-select
                    v-model="formCita.hora"
                    :picker-options="{
                        start: '07:00',
                        step: '00:30',
                        end: '19:00'
                    }"
                    placeholder="Escoge la hora">
                </el-time-select>
            </el-form-item>
          </el-col>
          <el-col :md="24" :xs="24">
            <el-form-item label="Fecha" :label-width="'100px'" prop="fecha">
                <el-date-picker
                    v-model="formCita.fecha"
                    type="date"
                    placeholder="Escoge la fecha">
                </el-date-picker>
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
      <span slot="footer" class="dialog-footer">
        <el-button @click="modalCita=false">Cancelar</el-button>
        <el-button
          type="primary"
          @click="guardar('formCita')"
          v-if="titulo=='Nueva cita'"
        >Crear cita</el-button>
        <el-button type="primary" @click="editar('formCita')" v-else>Editar cita</el-button>
      </span>
    </el-dialog>
  </el-row>
</template>

<script>
import moment from "moment";
export default {
  props: {
    contacto: {},
    datos:Array,
  },
  data() {
    return {
      modalCita: false,
      titulo: "",
      todasCitas: [],
      formCita: { id: "", hora:"", fecha:""},
      persona: {},
      reglas: {
        fecha:[
            {
                required: true,
                message: "Selecciona la fecha en que se realizó la cita",
                trigger: "blur"
            }
        ],
        hora:[
            {
                required: true,
                message: "Selecciona la hora en que se realizó la cita",
                trigger: "blur"
            }
        ]
      }
    };
  },

  created: function() {
    this.listar();
  },

  watch:{
    contacto(){
      this.listar();
    }
  },

  methods: {
    abrirModal: function(tipo, cita) {
      this.modalCita = true;
      if (tipo == "Editar") {
        this.titulo = "Editar cita";
        this.formCita.id = cita.id;
        this.formCita.hora = cita.hora;
        this.formCita.fecha = cita.fecha;
      } else {
        this.titulo = "Nueva cita";
        this.formCita.hora = "";
        this.formCita.fecha = "";
      }
    },

    listar: function() {
      let me = this;
      const fd = new FormData();
      fd.append("persona_id", this.$route.params.idContacto);
      axios
        .post("/cita/mostrar", fd)
        .then(function(response) {
          me.todasCitas = response.data;
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
          fd.append("nombre", "Donación de sangre");
          fd.append("fecha", moment(this.formCita.fecha).format("YYYY-MM-DD"));
          fd.append("hora", this.formCita.hora);
          fd.append("persona_id", this.$route.params.idContacto);
          axios
            .post("/cita/crear", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Cita creada",
                  message: "La cita fue creada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al crear la cita",
                  message: "Vuelve a intentar crear la cita."
                });
              }
              me.listar();
              me.modalCita=false;
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la creación de la cita",
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
          fd.append("id", this.formCita.id);
          fd.append("nombre", "Donación de sangre");
          fd.append("fecha", moment(this.formCita.fecha).format("YYYY-MM-DD"));
          fd.append("hora", this.formCita.hora);
          fd.append("persona_id", this.$route.params.idContacto);
          axios
            .post("/cita/editar", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "cita editada",
                  message: "La cita fue editada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al editar la cita",
                  message: "Vuelve a intentar editar la cita."
                });
              }
              me.listar();
              me.modalCita=false;
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la creación de la cita",
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
        "¿Estás seguro de eliminar la cita seleccionada?",
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
            .post("/cita/eliminar", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "cita eliminada",
                  message: "La cita fue eliminada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al eliminar la cita",
                  message: "Vuelve a intentar eliminar la cita."
                });
              }
              me.listar();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la eliminar de la cita",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        })
        .catch(() => {
          me.$message({
            type: "info",
            message: "Se canceló la eliminación de las citas"
          });
        });
    },

    convertirFecha(fecha) {
      moment.locale("es");
      return moment(fecha).format("LLLL");
    },
  }
};
</script>
