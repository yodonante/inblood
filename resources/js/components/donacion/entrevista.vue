<template>
  <el-row type="flex" justify="center">
    <el-col :span="22">
      <div>
        <el-card shadow="never">
          <el-form ref="formEntrevista" :model="formEntrevista" label-position="left">
            <el-row :gutter="10">
              <el-col :span="12">
                <p
                  style="font-size:16px"
                >¿Ha leído y mantenido el manual informativo que le entregamos?</p>
              </el-col>
              <el-col :span="12">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleManualInformativo"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="6">
                <p style="font-size:16px">¿Tiene más de 18 años?</p>
              </el-col>
              <el-col :span="6">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleEdad"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
              <el-row :gutter="10">
                <el-col :span="6">
                  <p style="font-size:16px">¿Pesas más de 50Kg?</p>
                </el-col>
                <el-col :span="6">
                  <el-form-item>
                    <el-switch
                      v-model="formEntrevista.cumplePeso"
                      active-text="Sí"
                      inactive-text="No"
                    ></el-switch>
                  </el-form-item>
                </el-col>
              </el-row>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <p style="font-size:16px">¿Haz donado sangre en los últimos 12 meses?¿Dónde?</p>
              </el-col>
              <el-col :span="6">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleDonarSangre"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item prop="LugarDonacionUltima">
                  <el-input v-model="formEntrevista.lugarDonacion" autocomplete="off"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <p
                  style="font-size:16px"
                >¿Estás tomando o has tomado algún medicamento en estos días?¿Cuáles?</p>
              </el-col>
              <el-col :span="6">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleMedicamento"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item prop="medicamento">
                  <el-input v-model="formEntrevista.medicamento" autocomplete="off"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <p
                  style="font-size:16px"
                >¿Está actualmente en una lista de espera para una cita médica?¿Por qué?</p>
              </el-col>
              <el-col :span="6">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleListaEspera"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item prop="listaEspera">
                  <el-input v-model="formEntrevista.listaEspera" autocomplete="off"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <p style="font-size:16px">¿Se encuentra bien de salud?</p>
              </el-col>
              <el-col :span="12">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleSaludable"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
            </el-row>
            <p style="font-size:16px">EN LAS PRÓXIMAS 24 HORAS:</p>
            <el-row :gutter="10">
              <el-col :span="12">
                <p style="font-size:16px">¿Va a realizar actividades deportivas u otra actividad?</p>
              </el-col>
              <el-col :span="12">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleActividadesDeportivas"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
            </el-row>
            <p style="font-size:16px">EN LAS ÚLTIMAS 2 SEMANAS:</p>
            <el-row :gutter="10">
              <el-col :span="12">
                <p
                  style="font-size:16px"
                >¿Ha tenido fiebre, dolor de cabeza o alguna evidencia de enfermedad?</p>
              </el-col>
              <el-col :span="12">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleEnfermedad"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
            </el-row>
            <p style="font-size:16px">EN EL ÚLTIMO MES:</p>
            <el-row :gutter="10">
              <el-col :span="12">
                <p
                  style="font-size:16px"
                >¿Tuvo contacto con algún paciente de una enfermedad contagiosa?</p>
              </el-col>
              <el-col :span="12">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleContactoContagioso"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <p style="font-size:16px">¿Recibió alguna vacuna?¿Cuál?</p>
              </el-col>
              <el-col :span="6">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleVacuna"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item prop="vacuna">
                  <el-input v-model="formEntrevista.vacuna" autocomplete="off"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <p style="font-size:16px">EN LOS ÚLTIMOS 12 MESES:</p>
            <el-row :gutter="10">
              <el-col :span="12">
                <p
                  style="font-size:16px"
                >¿Se colocó piercings, tatuajes o ha tenido cantacto accidental con sangre?</p>
              </el-col>
              <el-col :span="12">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleTatuaje"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <p style="font-size:16px">¿Ha tenido intervenciones quirúrgicas?</p>
              </el-col>
              <el-col :span="12">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleIntervencionQuirurgica"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
            </el-row>
            <p style="font-size:16px">ALGUNA VEZ EN SU VIDA:</p>
            <el-row :gutter="10">
              <el-col :span="12">
                <p
                  style="font-size:16px"
                >¿Padece alguna enfermedad o molestia que requiera control?¿Cuál?</p>
              </el-col>
              <el-col :span="6">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.CumpleEnfermedadControlable"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <el-form-item prop="vacuna">
                  <el-input v-model="formEntrevista.enfermedadControlable" autocomplete="off"></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <p style="font-size:16px">SI EL DONANTE ES MUJER:</p>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Última regla" label-width="120px">
                  <el-date-picker
                    v-model="formEntrevista.fechaUltimaRegla"
                    type="date"
                    placeholder="Última regla"
                  ></el-date-picker>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="6">
                <p style="font-size:16px">¿Estás gestando actualmente?</p>
              </el-col>
              <el-col :span="6">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleGestacion"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
              <el-col :span="6">
                <p style="font-size:16px">¿Estás dando de lactar?</p>
              </el-col>
              <el-col :span="6">
                <el-form-item>
                  <el-switch
                    v-model="formEntrevista.cumpleLactancia"
                    active-text="Sí"
                    inactive-text="No"
                  ></el-switch>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row :gutter="10">
              <el-col :span="12">
                <el-form-item label="Último parto" label-width="120px">
                  <el-date-picker
                    v-model="formEntrevista.fechaUltimoParto"
                    type="date"
                    placeholder="Fecha de último parto"
                  ></el-date-picker>
                </el-form-item>
              </el-col>
              <el-col :span="12">
                <el-form-item label="Número de gestaciones" :label-width="'160px'">
                  <el-input v-model="formEntrevista.numeroGestaciones" autocomplete="off"></el-input>
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
      formEntrevista: {
        cumpleManualInformativo: false,
        cumpleEdad: false,
        cumplePeso: false,
        cumpleDonarSangre: false,
        lugarDonacion: "",
        cumpleMedicamento: false,
        medicamento: "",
        cumpleListaEspera: false,
        listaEspera: "",
        cumpleSaludable: false,
        cumpleActividadDeportiva: false,
        cumpleEnfermedad: false,
        cumpleContactoContagioso: false,
        cumpleVacuna: false,
        cumpleTatuaje: false,
        cumpleIntervencionQuirurgica: false,
        CumpleEnfermedadControlable: false,
        enfermedadControlable: "",
        fechaUltimaRegla: "",
        cumpleGestacion: false,
        cumpleLactancia: false,
        fechaUltimoParto: "",
        numeroGestaciones: ""
      }
    };
  },

  computed: mapState({
    guardarGlobal: state => state.donacion.guardarFormularioEntrevista
  }),

  watch: {
    guardarGlobal() {
      this.guardar("formEntrevista");
    }
  },

  methods: {
    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("peso", me.formEntrevista.peso);
          fd.append("cumplePeso", me.formEntrevista.cumplePeso);
          fd.append("pulso", me.formEntrevista.pulso);
          fd.append("cumplePulso", me.formEntrevista.cumplePulso);
          fd.append("talla", me.formEntrevista.talla);
          fd.append("cumpleTalla", me.formEntrevista.cumpleTalla);
          fd.append("presion", me.formEntrevista.presion);
          fd.append("cumplePresion", me.formEntrevista.cumplePresion);
          fd.append("brazos", me.formEntrevista.brazos);
          fd.append("comentarios", me.formEntrevista.comentarios);
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
