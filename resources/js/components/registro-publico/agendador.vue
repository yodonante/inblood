<template>
  <el-row style="margin-top:20px">
    <el-col :xs="{span: 22, push:1 }" :sm="{span: 20, push:2 }" :md="{span: 12, push:6 }">
      <el-card>
        <el-row style="margin-bottom:20px">
          <el-col :sm="{span:12, push:7}" :xs="{span:24}">
            <h2>AGENDADOR DE CITAS</h2>
          </el-col>
        </el-row>
        <el-form
          label-position="right"
          :rules="reglas"
          ref="formCita"
          class="formCita"
          :model="formCita"
        >
          <el-row>
            <el-row style="text-align:center; margin:10px">
              <h2>Dona con nosotros</h2>
              <span>Esperamos que nos ayudes a salvar vidas.</span>
            </el-row>
            <el-row>
              <h3>Requisitos</h3>
            </el-row>
            <el-row style="margin:20px">
              <el-col :span="24">
                <el-checkbox v-model="formCita.edad">Soy mayor de 18 años y menos de 65</el-checkbox>
              </el-col>
              <el-col :span="24">
                <el-checkbox v-model="formCita.peso">Peso más de 50 Kg</el-checkbox>
              </el-col>
              <el-col :span="24">
                <el-checkbox
                  v-model="formCita.fiebre"
                >No he tenido fiebre superior a 38°C o gripe en las últimas 2 semanas</el-checkbox>
              </el-col>
              <el-col :span="24">
                <el-checkbox
                  v-model="formCita.vacuna"
                >No he recibido la vacuna de la influenza en las últimas 24 horas.</el-checkbox>
              </el-col>
              <el-col :span="24">
                <el-checkbox
                  v-model="formCita.tatuaje"
                >No me he realizado tatuajes ni perforaciones y/o acupuntura en los últimos 12 meses</el-checkbox>
              </el-col>
            </el-row>
            <el-col :md="24" :xs="24">
              <el-form-item label="DNI" :label-width="'100px'" prop="dni">
                <el-input
                  v-model="formCita.dni"
                  autocomplete="off"
                  @blur="buscarDonante()"
                  maxlength="8"
                  type="text"
                  show-word-limit
                ></el-input>
              </el-form-item>
            </el-col>
            <el-col :md="24" :xs="24">
              <el-form-item
                label="Nombre del donante"
                :label-width="'200px'"
                disabled
                prop="nombre"
              >
                <el-input v-model="formCita.nombreDonante" disabled></el-input>
              </el-form-item>
            </el-col>
            <el-col :md="12" :xs="24">
              <el-form-item label="Hora" :label-width="'100px'" prop="hora">
                <el-time-select
                  v-model="formCita.hora"
                  :picker-options="{
                        start: '07:00',
                        step: '00:30',
                        end: '19:00'
                    }"
                  placeholder="Escoge la hora"
                ></el-time-select>
              </el-form-item>
            </el-col>
            <el-col :md="12" :xs="24">
              <el-form-item label="Fecha" :label-width="'100px'" prop="fecha">
                <el-date-picker v-model="formCita.fecha" type="date" placeholder="Escoge la fecha"></el-date-picker>
              </el-form-item>
            </el-col>
          </el-row>
        </el-form>
        <el-row type="flex" justify="center" style="margin-top:20px">
          <el-col>
            <el-button
              @click="guardar('formCita')"
              style="width:100%;background-color: #c7626b;border-color: #c7626b;"
              type="primary"
            >AGENDAR CITA</el-button>
          </el-col>
        </el-row>
      </el-card>
    </el-col>
  </el-row>
</template>

<script>
import moment from "moment";
export default {
  props: {
    contacto: {},
    datos: Array
  },
  data() {
    return {
      modalCita: false,
      titulo: "",
      todasCitas: [],
      formCita: {
        id: "",
        hora: "",
        fecha: "",
        nombreDonante: "",
        dni: "",
        edad: false,
        peso: false,
        fiebre: false,
        vacuna: false,
        tatuaje: false
      },
      persona: {},
      reglas: {
        fecha: [
          {
            required: true,
            message: "Selecciona la fecha en que se realizó la cita",
            trigger: "blur"
          }
        ],
        hora: [
          {
            required: true,
            message: "Selecciona la hora en que se realizó la cita",
            trigger: "blur"
          }
        ],
        edad: [
          {
            required: true,
            type: "boolean",
            message: "Debes tener más de 18 años para poder donar",
            trigger: "blur"
          }
        ],
        peso: [
          {
            required: true,
            message: "Debes pesar más de 50Kg para poder donar",
            trigger: "blur"
          }
        ],
        fiebre: [
          {
            required: true,
            message:
              "Por tu seguridad, no puedes donar si has tenido fiembre en las últimas 2 semanas",
            trigger: "blur"
          }
        ],
        vacuna: [
          {
            required: true,
            message:
              "No puedes donar si has recibido la vacuna contra la influeza en las últimas 24 horas",
            trigger: "blur"
          }
        ],
        tatuaje: [
          {
            required: true,
            message:
              "No puedes donar si te has hecho algún tatuaje o perforación en el último año",
            trigger: "blur"
          }
        ],
        dni: [
          {
            required: true,
            message: "Debes ingresar tu número de DNI",
            trigger: "blur"
          }
        ]
      },
      donante: {}
    };
  },

  methods: {
    guardar: function(formulario) {
      let me = this;
      if (me.formCita.edad == true) {
        if (me.formCita.peso == true) {
          if (me.formCita.fiebre == true) {
            if (me.formCita.vacuna == true) {
              if (me.formCita.tatuaje == true) {
                me.$refs[formulario].validate(valid => {
                  if (valid) {
                    const fd = new FormData();
                    fd.append("nombre", "Donación de sangre");
                    fd.append(
                      "fecha",
                      moment(me.formCita.fecha).format("YYYY-MM-DD")
                    );
                    fd.append("hora", me.formCita.hora);
                    fd.append("persona_id", me.donante.persona_id);
                    fd.append("centromedico_id", 1);
                    axios
                      .post("/cita/crear", fd)
                      .then(function(response) {
                        if (response.data == "Ok") {
                          me.$notify({
                            title: "Cita creada",
                            message: "La cita fue creada con éxito.",
                            type: "success"
                          });
                          me.abrirGracias();
                        } else {
                          me.$notify.error({
                            title: "Error al crear la cita",
                            message: "Vuelve a intentar crear la cita."
                          });
                        }
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
              } else {
                me.$message({
                  message: "No puedes donar si te has tatuado en el último año",
                  type: "warning"
                });
              }
            } else {
              me.$message({
                message:
                  "No puedes donar si te has vacunado en las últimas 24 horas.",
                type: "warning"
              });
            }
          } else {
            me.$message({
              message: "No puedes donar si has tenido fiebre.",
              type: "warning"
            });
          }
        } else {
          me.$message({
            message: "Debes pesar más de 50Kg.",
            type: "warning"
          });
        }
      } else {
        me.$message({
          message: "Debes ser mayor de edad.",
          type: "warning"
        });
      }
    },

    abrirGracias() {
      this.$alert('Gracias por agendar tu cita con nosotros', 'GRACIAS', {
        confirmButtonText: 'Continuar',
        callback: action => {
          window.location="http://yodonante.com";
        }
      });
    },

    buscarDonante: function() {
      let me = this;
      const fd = new FormData();
      if (this.formCita.dni.length == 8) {
        fd.append("dni", this.formCita.dni);
        axios
          .post("/persona/mostrarPorDNI", fd)
          .then(function(response) {
            if (response.data == "No") {
              me.$message({
                message: "No se encontró la persona. Regístrate primero.",
                type: "warning"
              });
              me.formCita.nombreDonante = "";
            } else {
              me.$message({
                message: "Persona encontrada.",
                type: "success"
              });
              me.formCita.nombreDonante =
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

    convertirFecha(fecha) {
      moment.locale("es");
      return moment(fecha).format("LLLL");
    }
  }
};
</script>
