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
    <el-row v-for="llamada in todasLlamadas" :key="llamada.id">
      <el-row>
        <el-col :span="24">
          <h3 v-text="llamada.resultado"></h3>
        </el-col>
        <el-col :span="24" style="font-size:16px">
          <span v-text="llamada.descripcion"></span>
        </el-col>
        <el-col :span="24" style="font-size:16px">
          <span style="font-size:13px" v-text="'Fecha de llamada: ' + llamada.fecha"></span>
          <span style="font-size:13px;margin-left:10px" v-text="'Hora de llamada: ' + llamada.hora"></span>
        </el-col>
        <el-col style="margin-top:5px;color:grey;font-size:14px;text-align: right;" :span="24">
          <span v-text="'Creado: ' + convertirFecha(llamada.created_at)" style="margin-right:20px"></span>
          <span v-text="'Editado por última vez: ' + convertirFecha(llamada.updated_at)"></span>
        </el-col>
        <el-col :span="24">
          <el-button
            @click="abrirModal('Editar',llamada)"
            type="warning"
            icon="el-icon-edit"
            size="mini"
            round
          >Editar</el-button>
          <el-button
            @click="eliminar(llamada.id)"
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
    <el-dialog :visible.sync="modalLlamada" :title="titulo" width="33%" :show-close="false">
      <el-form
        label-position="right"
        :rules="reglas"
        ref="formLlamada"
        class="formLlamada"
        :model="formLlamada"
      >
        <el-row>
          <el-col :md="24" :xs="24">
            <el-form-item label="Resultado:" label-width="100px" prop="resultado">
              <el-select v-model="formLlamada.resultado" placeholder="Selecciona">
                <el-option
                  v-for="item in resultadosList"
                  :key="item.id"
                  :label="item.nombre"
                  :value="item.id"
                ></el-option>
              </el-select>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :md="24" :xs="24">
            <el-form-item label="Descripción" label-width="100px" prop="descripcion">
              <el-input
                type="textarea"
                v-model="formLlamada.descripcion"
                autocomplete="off"
                :autosize="{ minRows: 2, maxRows: 4}"
              />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :md="24" :xs="24">
            <el-form-item label="Hora" :label-width="'100px'" prop="hora">
                <el-time-select
                    v-model="formLlamada.hora"
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
                    v-model="formLlamada.fecha"
                    type="date"
                    placeholder="Escoge la fecha">
                </el-date-picker>
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
      <span slot="footer" class="dialog-footer">
        <el-button @click="modalLlamada=false">Cancelar</el-button>
        <el-button
          type="primary"
          @click="guardar('formLlamada')"
          v-if="titulo=='Nueva llamada'"
        >Crear llamada</el-button>
        <el-button type="primary" @click="editar('formLlamada')" v-else>Editar llamada</el-button>
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
      modalLlamada: false,
      titulo: "",
      todasLlamadas: [],
      formLlamada: { id: "", descripcion: "", hora:"", fecha:"", resultado:"" },
      persona: {},
      resultadosList:[],
      reglas: {
        descripcion: [
          {
            required: true,
            message: "Coloca la descripción de la llamada",
            trigger: "blur"
          }
          // { min: 4, max:250, message: 'El contacto debe tener entre 5 y 250 caracteres', trigger: 'blur' }
        ],
        resultado:[
            {
                required: true,
                message: "Selecciona cómo resultó la llamada",
                trigger: "blur"
            }
        ],
        fecha:[
            {
                required: true,
                message: "Selecciona la fecha en que se realizó la llamada",
                trigger: "blur"
            }
        ],
        hora:[
            {
                required: true,
                message: "Selecciona la hora en que se realizó la llamada",
                trigger: "blur"
            }
        ]
      }
    };
  },

  created: function() {
    this.getResultados();
  },

  watch:{
    contacto(){
      this.listar();
    }
  },

  methods: {
    abrirModal: function(tipo, llamada) {
      this.modalLlamada = true;
      if (tipo == "Editar") {
        this.titulo = "Editar llamada";
        this.formLlamada.id = llamada.id;
        this.formLlamada.descripcion = llamada.descripcion;
        this.formLlamada.hora = llamada.hora;
        this.formLlamada.fecha = llamada.fecha;
        this.formLlamada.resultado = llamada.resultado_id;
      } else {
        this.titulo = "Nueva llamada";
        this.formLlamada.descripcion = "";
        this.formLlamada.hora = "";
        this.formLlamada.fecha = "";
        this.formLlamada.resultado = "";
      }
    },

    listar: function() {
      let me = this;
      const fd = new FormData();
      fd.append("dato_id", this.datos[0].id);
      axios
        .post("/llamada/mostrar", fd)
        .then(function(response) {
          me.todasLlamadas = response.data;
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
          fd.append("dato_id", this.datos[0].id);
          fd.append("descripcion", this.formLlamada.descripcion);
          fd.append("resultado_llamada_id", this.formLlamada.resultado);
          fd.append("fecha", moment(this.formLlamada.fecha).format("YYYY-MM-DD"));
          fd.append("hora", this.formLlamada.hora);
          axios
            .post("/llamada/crear", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Llamada creada",
                  message: "La llamada fue creada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al crear la llamada",
                  message: "Vuelve a intentar crear la llamada."
                });
              }
              me.listar();
              me.modalLlamada=false;
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la creación de la llamada",
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
          fd.append("id", this.formLlamada.id);
          fd.append("dato_id", this.datos[0].id);
          fd.append("descripcion", this.formLlamada.descripcion);
          fd.append("resultado_llamada_id", this.formLlamada.resultado);
          fd.append("fecha", moment(this.formLlamada.fecha).format("YYYY-MM-DD"));
          fd.append("hora", this.formLlamada.hora);
          axios
            .post("/llamada/editar", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Llamada editada",
                  message: "La llamada fue editada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al editar la llamada",
                  message: "Vuelve a intentar editar la llamada."
                });
              }
              me.listar();
              me.modalLlamada=false;
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la creación de la llamada",
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
        "¿Estás seguro de eliminar la llamada seleccionada?",
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
            .post("/llamada/eliminar", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Llamada eliminada",
                  message: "La llamada fue eliminada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al eliminar la llamada",
                  message: "Vuelve a intentar eliminar la llamada."
                });
              }
              me.listar();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la eliminar de la llamada",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        })
        .catch(() => {
          me.$message({
            type: "info",
            message: "Se canceló la eliminación de las llamadas"
          });
        });
    },

    convertirFecha(fecha) {
      moment.locale("es");
      return moment(fecha).format("LLLL");
    },

    getResultados: function() {
      let me = this;
      var url = '/llamada/resultados';
      axios.get(url).then(response => {
        me.resultadosList = response.data;
      });
    }
  }
};
</script>
