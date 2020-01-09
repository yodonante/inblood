<template>
  <el-row type="flex" justify="center">
    <el-col :span="22">
      <div>
        <el-card shadow="never">
          <el-form :rules="reglas" ref="formDonacion" :model="formDonacion" label-position="left">
            <h2>EXTRACCIÓN</h2>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Número de bolsa" label-width="150px" prop="numeroBolsa">
                  <el-input v-model="formDonacion.numeroBolsa"></el-input>
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="Número de tubo" label-width="150px" prop="numeroTubo">
                  <el-input v-model="formDonacion.numeroTubo"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Lesiones" label-width="100px">
                    <el-switch
                    v-model="formDonacion.cumplePresion"
                    active-text="Sí"
                    inactive-text="No"
                    ></el-switch>
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="Descripción" label-width="80px" prop="descripcionLesion">
                  <el-input v-model="formDonacion.descripcion"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Número de venopunsiones" label-width="200px" prop="numeroVenopunsiones">
                  <el-input v-model="formDonacion.numeroVenopunsiones"></el-input>
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="Descripción" label-width="80px" prop="descripcionVenopunsiones">
                  <el-input v-model="formDonacion.numeroTubo"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Volúmen extraído" :label-width="'150px'" prop="volumenExtraido">
                    <el-input v-model="formDonacion.volumenExtraido" autocomplete="off">
                        <template slot="append">cm<sup>3</sup></template>
                    </el-input>
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="Tiempo de donación" label-width="150px" prop="tiempoDonacion">
                  <el-input v-model="formDonacion.tiempoDonacion"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Reacciones adversas" label-width="150px" prop="reaccionesAdversas">
                  <el-input v-model="formDonacion.reaccionesAdversas"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <h2>AFÉRESI</h2>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Eritrocitos" label-width="80px" prop="eritrocitos">
                  <el-input v-model="formDonacion.eritrocitos">
                    <template slot="append">mill/mm<sup>3</sup></template>
                  </el-input>
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="FV Eritrocitos" label-width="150px" prop="fvEritrocitos">
                    <el-date-picker
                        v-model="formDonacion.fvEritrocitos"
                        type="date"
                        placeholder="Fecha"
                    ></el-date-picker>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Leucocitos" label-width="80px" prop="leucocitos">
                  <el-input v-model="formDonacion.leucocitos">
                    <template slot="append">mill/mm<sup>3</sup></template>
                  </el-input>
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="FV Leucocitos" label-width="150px" prop="fvLeucocitos">
                    <el-date-picker
                        v-model="formDonacion.fvLeucocitos"
                        type="date"
                        placeholder="Fecha"
                    ></el-date-picker>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Plaquetas" label-width="80px" prop="plaquetas">
                  <el-input v-model="formDonacion.plaquetas"></el-input>
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="FV Plaquetas" label-width="150px" prop="fvPlaquetas">
                    <el-date-picker
                        v-model="formDonacion.fvPlaquetas"
                        type="date"
                        placeholder="Fecha"
                    ></el-date-picker>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Plasma" label-width="80px" prop="plasma">
                  <el-input v-model="formDonacion.plasma"></el-input>
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="FV Plasma" label-width="150px" prop="fvPlasma">
                    <el-date-picker
                        v-model="formDonacion.fvPlasma"
                        type="date"
                        placeholder="Fecha"
                    ></el-date-picker>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
                <el-col :span="12">
                    <el-form-item label="Próxima fecha de donación disponible" label-width="250px" prop="proxFechaDonacion">
                        <el-date-picker
                            v-model="formDonacion.proxFechaDonacion"
                            type="date"
                            placeholder="Fecha"
                        ></el-date-picker>
                    </el-form-item>
                </el-col>
            </el-row>
          </el-form>
        </el-card>
      </div>
    </el-col>
  </el-row>
</template>

<script>
import { mapState } from "vuex";
export default {
  data() {
    return {
      reglas: {
        peso: [
          {
            required: true,
            message: "Coloca el peso del contacto",
            trigger: "blur"
          }
        ],
        pulso: [
          {
            required: true,
            message: "Coloca el nombre del contacto",
            trigger: "blur"
          }
        ],
        talla: [
          {
            required: true,
            message: "Coloca la talla del contacto",
            trigger: "blur"
          }
        ],
        presion: [
          {
            required: true,
            message: "Coloca la presion del contacto",
            trigger: "blur"
          }
        ],
        brazos: [
          {
            required: true,
            message:
              "Coloca el resultado de la evaluación de los brazos del contacto",
            trigger: "blur"
          }
        ]
      },
      formDonacion: {}
    };
  },

  computed: mapState({
    guardarGlobal: state => state.donacion.guardarFormularioDonacion
  }),

  watch: {
    guardarGlobal() {
      this.guardar("formDonacion");
    }
  },

  methods: {
    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("peso", me.formDonacion.peso);
          fd.append("cumplePeso", me.formDonacion.cumplePeso);
          fd.append("pulso", me.formDonacion.pulso);
          fd.append("cumplePulso", me.formDonacion.cumplePulso);
          fd.append("talla", me.formDonacion.talla);
          fd.append("cumpleTalla", me.formDonacion.cumpleTalla);
          fd.append("presion", me.formDonacion.presion);
          fd.append("cumplePresion", me.formDonacion.cumplePresion);
          fd.append("brazos", me.formDonacion.brazos);
          fd.append("comentarios", me.formDonacion.comentarios);
          axios
            .post("/tarea/crear", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "La tercera fase del proceso fue guardada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al guardar el formulario",
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
    }
  }
};
</script>
