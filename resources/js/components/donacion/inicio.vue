<template>
  <el-row type="flex" justify="center" align="middle">
    <el-col :span="8" style="display:inline-block;text-align:right">
      <img src="/img/enfermera.jpg">
    </el-col>
    <el-col :span="8">
      <div>
        <el-card shadow="never">
          <el-form
            :rules="reglas"
            ref="formInicio"
            :model="formInicio"
            label-position="left"
            :label-width="'120px'"
          >
            <el-form-item label="DNI" :label-width="'100px'" prop="dni">
              <el-input
                v-model="formInicio.dni"
                autocomplete="off"
                @blur="buscarDonante()"
                maxlength="8"
                type="text"
                show-word-limit
              ></el-input>
            </el-form-item>
            <el-form-item label="Nombre donante" disabled prop="nombre">
              <el-input v-model="formInicio.nombreDonante" disabled></el-input>
            </el-form-item>
            <el-form-item label="Responsable" prop="responsable">
              <el-input v-model="formInicio.responsable"></el-input>
            </el-form-item>
            <el-form-item label="Tipo de donante" prop="tipoDonante">
              <el-radio-group v-model="formInicio.tipoDonante">
                <el-radio label="Donante voluntario"></el-radio>
                <el-radio label="Donante por reposición"></el-radio>
              </el-radio-group>
            </el-form-item>
            <el-form-item label="Última donación" :label-width="'120px'" prop="ultimaDonacion">
              <el-date-picker
                v-model="formInicio.ultimaDonacion"
                placeholder="Fecha de la última donación"
              ></el-date-picker>
            </el-form-item>
            <el-form-item label="Mayoría de edad" prop="mayoriaEdad">
              <el-radio-group v-model="formInicio.mayoriaEdad">
                <el-radio label="Sí"></el-radio>
                <el-radio label="No, adjunta carta notarial"></el-radio>
              </el-radio-group>
            </el-form-item>
            <el-form-item prop="cartaNotarial">
              <el-upload
                class="upload-demo"
                action="https://jsonplaceholder.typicode.com/posts/"
                :before-upload="importarContactos"
                :auto-upload="false"
                multiple
                :limit="1"
                :on-exceed="limiteExcedido"
                v-show="formInicio.mayoriaEdad=='No, adjunta carta notarial'"
              >
                <el-button size="small" type="primary">Clic para subir archivo</el-button>
                <div
                  slot="tip"
                  class="el-upload__tip"
                >Solo archivos jpg/png con un tamaño menor de 2MB</div>
              </el-upload>
            </el-form-item>
          </el-form>
        </el-card>
      </div>
    </el-col>
    <el-col :span="8"></el-col>
  </el-row>
</template>

<script>
import { mapState,mapMutations } from "vuex";
import moment from "moment";
export default {
  data() {
    return {
      reglas: {
        dni: [
          {
            required: true,
            message: "Coloca el DNI del donante",
            trigger: "blur"
          },
          { min: 8, max:8, message: 'El DNI debe tener 8 caracteres', trigger: 'blur' },
        ],
        responsable: [
          {
            required: true,
            message: "Coloca el nombre del responsable de esta donación",
            trigger: "blur"
          }
        ],
        tipoDonante: [
          {
            required: true,
            message: "Selecciona qué tipo de donación es.",
            trigger: "blur"
          }
        ],
        ultimaDonacion: [
          {
            required: true,
            message: "Coloca cuándo donó por última vez.",
            trigger: "blur"
          }
        ],
        mayoriaEdad: [
          {
            required: true,
            message: "Selecciona si el donante es mayor de edad",
            trigger: "blur"
          }
        ]
      },
      formInicio: {
        dni: "",
        nombre: "",
        responsable: "",
        tipoDonante: "",
        ultimaDonacion: "",
        mayoriaEdad: "",
        nombreDonante:"",
      },
      donante: {}
    };
  },

  computed: mapState({
    guardarGlobal: state => state.donacion.guardarInicio
  }),

  watch: {
    guardarGlobal() {
      this.guardar("formInicio");
    }
  },
  methods: {
    ...mapMutations(["getEtapaDonacion"]),
    guardarEtapaDonacion(etapa){
      this.getEtapaDonacion(etapa);
    },
    buscarDonante: function() {
      let me = this;
      const fd = new FormData();
      if (this.formInicio.dni.length == 8) {
        fd.append("dni", this.formInicio.dni);
        axios
          .post("/persona/mostrarPorDNI", fd)
          .then(function(response) {
            if (response.data == "No") {
              me.$message({
                message: "No se encontró la persona. Regístrala primero.",
                type: "warning"
              });
            } else {
              me.$message({
                message: "Persona encontrada.",
                type: "success"
              });
              me.formInicio.nombreDonante =
              response.data[0][0].nombre + " " + response.data[0][0].apellido;
              me.donante = response.data[0][0];
            }
          })
          .catch(function(error) {
            console.log(error);
            me.$notify.error({
              title: "Error en el servidor",
              message:
                "Vuelve a intentar más tarde o llama a nuestro equipo técnico."
            });
          });
      }
    },

    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          var tipodonante;
          if(me.formInicio.tipoDonacion == 'Donante por reposición'){
            tipodonante = 1;
          }else{
            tipodonante = 0;
          }
          fd.append("persona_id", me.donante.persona_id);
          fd.append("responsable", me.formInicio.responsable);
          fd.append("fecha", moment(me.formInicio.ultimaDonacion).format("YYYY-MM-DD"));
          fd.append("tipo_donacion", tipodonante);
          fd.append("carta_notarial", "En desarrollo");
          axios
            .post("/etapaDonacion/crear", fd)
            .then(function(response) {
              if (response.data[1] == "Ok") {
                me.$notify({
                  title: "La primera fase del proceso fue completada con éxito",
                  type: "success"
                });
                me.guardarEtapaDonacion(response.data[0]);
              } else {
                me.$notify.error({
                  title: "Error al guardar el formulario.",
                  message: "Vuelve a intentarlo más tarde."
                });
              }
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error al guardar el formulario",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        } else {
          return false;
        }
      });
    },

    importarContactos: function() {},
    limiteExcedido: function() {}
  }
};
</script>

