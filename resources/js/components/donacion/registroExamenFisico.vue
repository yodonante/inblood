<template>
  <el-row type="flex" justify="center">
    <el-col :span="22">
      <div>
        <el-card shadow="never">
          <el-form
            :rules="reglas"
            ref="formExamenFisico"
            :model="formExamenFisico"
            label-position="left"
          >
            <el-row :gutter="10">
              <el-col :span="12">
                <el-row :gutter="10">
                  <el-col :span="12">
                    <el-form-item label="Peso" :label-width="'60px'" prop="peso">
                      <el-input v-model="formExamenFisico.peso" autocomplete="off">
                           <template slot="append">Kg</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="12">
                    <el-form-item>
                      <el-switch
                        v-model="formExamenFisico.cumplePeso"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="12">
                    <el-form-item
                      label="Pulso sanguíneo"
                      :label-width="'120px'"
                      prop="pulso"
                    >
                      <el-input v-model="formExamenFisico.pulso" autocomplete="off">
                          <template slot="append">lat/min</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="12">
                    <el-form-item>
                      <el-switch
                        v-model="formExamenFisico.cumplePulso"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                </el-row>
              </el-col>
              <el-col :span="12">
                <el-row :gutter="10">
                  <el-col :span="12">
                    <el-form-item label="Talla" :label-width="'50px'" prop="talla">
                      <el-input v-model="formExamenFisico.talla" autocomplete="off">
                          <template slot="append">m</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="12">
                    <el-form-item>
                      <el-switch
                        v-model="formExamenFisico.cumpleTalla"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="12">
                    <el-form-item label="Presión arterial" :label-width="'110px'" prop="presion">
                      <el-input v-model="formExamenFisico.presion" autocomplete="off">
                          <template slot="append">mmHg</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="12">
                    <el-form-item>
                      <el-switch
                        v-model="formExamenFisico.cumplePresion"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                </el-row>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="24">
                <el-form-item label="Inspección en brazos" label-width="150px" prop="brazos">
                  <el-input
                    v-model="formExamenFisico.brazos"
                    type="textarea"
                    :autosize="{ minRows: 2, maxRows: 4}"
                  ></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="24">
                <el-form-item label="Comentarios" label-width="80px">
                  <el-input
                    v-model="formExamenFisico.comentarios"
                    type="textarea"
                    :autosize="{ minRows: 2, maxRows: 4}"
                  ></el-input>
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
            message: "Coloca el resultado de la evaluación de los brazos del contacto",
            trigger: "blur"
          }
        ]
      },
      formExamenFisico: {}
    };
  },

  computed: mapState({
    guardarGlobal: state => state.donacion.guardarFormularioExamenFisico
  }),

  watch: {
    guardarGlobal() {
      this.guardar("formExamenFisico");
    }
  },

  methods: {
    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("peso", me.formExamenFisico.peso);
          fd.append("cumplePeso", me.formExamenFisico.cumplePeso);
          fd.append("pulso", me.formExamenFisico.pulso);
          fd.append("cumplePulso", me.formExamenFisico.cumplePulso);
          fd.append("talla", me.formExamenFisico.talla);
          fd.append("cumpleTalla", me.formExamenFisico.cumpleTalla);
          fd.append("presion", me.formExamenFisico.presion);
          fd.append("cumplePresion", me.formExamenFisico.cumplePresion);
          fd.append("brazos", me.formExamenFisico.brazos);
          fd.append("comentarios", me.formExamenFisico.comentarios);
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
