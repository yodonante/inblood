<template>
  <el-row type="flex" justify="center">
    <el-col :span="22">
      <div>
        <el-card shadow="never">
          <el-form
            :rules="reglas"
            ref="formRegistroBasico"
            :model="formRegistroBasico"
            label-position="left"
            :label-width="'120px'"
          >
            <el-row :gutter="10">
              <el-col :span="12">
                <el-col :span="24">
                  <el-form-item label="Nombre" :label-width="'60px'" prop="nombre">
                    <el-input v-model="formRegistroBasico.nombre" autocomplete="off"></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="12">
                  <el-form-item label="Edad" label-width="60px" prop="edad">
                    <el-input v-model="formRegistroBasico.edad"></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="12">
                  <el-form-item label="Sexo" prop="sexo" label-width="60px">
                    <el-select v-model="formRegistroBasico.sexo" placeholder="Selecciona">
                      <el-option
                        v-for="item in sexoList"
                        :key="item.id"
                        :label="item.nombre"
                        :value="item.id"
                      ></el-option>
                    </el-select>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item
                    label="Lugar de nacimiento"
                    label-width="140px"
                    prop="lugarNacimiento"
                  >
                    <el-input v-model="formRegistroBasico.lugarNacimiento"></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Domicilio" label-width="80px" prop="domicilio">
                    <el-input v-model="formRegistroBasico.domicilio"></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Departamento" :label-width="'100px'" prop="departamento">
                    <el-select
                      v-model="formRegistroBasico.departamento"
                      placeholder="Selecciona"
                      @change="getProvincias(formRegistroBasico.departamento)"
                    >
                      <el-option
                        v-for="item in departamentoList"
                        :key="item.id"
                        :label="item.nombre"
                        :value="item.id"
                      ></el-option>
                    </el-select>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Ocupación" label-width="80px" prop="ocupacion">
                    <el-input v-model="formRegistroBasico.ocupacion"></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Celular" prop="celular">
                    <el-input
                      v-model="formRegistroBasico.celular"
                      autocomplete="off"
                      placeholder="Escribe el celular de contacto"
                      maxlength="9"
                      show-word-limit
                      type="text"
                    ></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Viajes" label-width="60px" prop="viajes">
                    <el-input v-model="formRegistroBasico.viajes"></el-input>
                  </el-form-item>
                </el-col>
              </el-col>
              <el-col :span="12">
                <el-col :span="24">
                  <el-form-item label="Apellidos" label-width="80px" prop="apellido">
                    <el-input v-model="formRegistroBasico.apellido"></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Correo" label-width="80px" prop="correo">
                    <el-input v-model="formRegistroBasico.correo"></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Nacimiento" prop="fechaNacimiento">
                    <el-date-picker
                      v-model="formRegistroBasico.fechaNacimiento"
                      type="date"
                      placeholder="Fecha de Nacimiento"
                    ></el-date-picker>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Estado civil" prop="estadoCivil">
                    <el-select v-model="formRegistroBasico.estadoCivil" placeholder="Selecciona">
                      <el-option
                        v-for="item in estadoCivilList"
                        :key="item.id"
                        :label="item.nombre"
                        :value="item.id"
                      ></el-option>
                    </el-select>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Provincia" prop="provincia">
                    <el-select
                      v-model="formRegistroBasico.provincia"
                      placeholder="Selecciona"
                      @change="getDistritos(formRegistroBasico.provincia)"
                    >
                      <el-option
                        v-for="item in provinciaList"
                        :key="item.id"
                        :label="item.nombre"
                        :value="item.id"
                      ></el-option>
                    </el-select>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Distrito" prop="distrito">
                    <el-select v-model="formRegistroBasico.distrito" placeholder="Selecciona">
                      <el-option
                        v-for="item in distritoList"
                        :key="item.id"
                        :label="item.nombre"
                        :value="item.id"
                      ></el-option>
                    </el-select>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Lugar de trabajo" label-width="120px" prop="lugarTrabajo">
                    <el-input v-model="formRegistroBasico.lugarTrabajo"></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Teléfono" label-width="80px">
                    <el-input
                      v-model="formRegistroBasico.telefono"
                      autocomplete="off"
                      placeholder="Escribe el teléfono de contacto"
                      maxlength="6"
                      show-word-limit
                      type="text"
                    ></el-input>
                  </el-form-item>
                </el-col>
                <el-col :span="24">
                  <el-form-item label="Permanencia" label-width="100px" prop="permanencia">
                    <el-input v-model="formRegistroBasico.permanencia"></el-input>
                  </el-form-item>
                </el-col>
              </el-col>
            </el-row>
            <el-col :span="24">
              <el-form-item label="Comentarios" label-width="80px">
                <el-input
                  v-model="formRegistroBasico.comentarios"
                  type="textarea"
                  :autosize="{ minRows: 2, maxRows: 4}"
                ></el-input>
              </el-form-item>
            </el-col>
          </el-form>
        </el-card>
      </div>
    </el-col>
  </el-row>
</template>

<script>
import ubicacion from "../../util/ubicacion.js";
import moment from "moment";
import { mapState } from "vuex";
export default {
  data() {
    return {
      reglas: {
        nombre: [
          {
            required: true,
            message: "Coloca el nombre del contacto",
            trigger: "blur"
          }
        ],
        edad: [
          {
            required: true,
            message: "Coloca la edad del contacto",
            trigger: "blur"
          }
        ],
        sexo: [
          {
            required: true,
            message: "Coloca el sexo del contacto",
            trigger: "blur"
          }
        ],
        lugarNacimiento: [
          {
            required: true,
            message: "Coloca el lugar de nacimiento del contacto",
            trigger: "blur"
          }
        ],
        domicilio: [
          {
            required: true,
            message: "Coloca la dirección de domicilio del contacto",
            trigger: "blur"
          }
        ],
        departamento: [
          {
            required: true,
            message: "Coloca el departamento del contacto",
            trigger: "blur"
          }
        ],
        ocupacion: [
          {
            required: true,
            message: "Coloca la ocupacion del contacto",
            trigger: "blur"
          }
        ],
        celular: [
          {
            required: true,
            message: "Coloca el celular del contacto",
            trigger: "blur"
          }
        ],
        viajes: [
          {
            required: true,
            message: "Coloca los viajes que realizó contacto",
            trigger: "blur"
          }
        ],
        apellido: [
          {
            required: true,
            message: "Coloca el apellido del contacto",
            trigger: "blur"
          }
        ],
        correo: [
          {
            required: true,
            message: "Coloca el correo del contacto",
            trigger: "blur"
          }
        ],
        fechaNacimiento: [
          {
            required: true,
            message: "Coloca la fecha de nacimiento del contacto",
            trigger: "blur"
          }
        ],
        estadoCivil: [
          {
            required: true,
            message: "Coloca el estado civil del contacto",
            trigger: "blur"
          }
        ],
        provincia: [
          {
            required: true,
            message: "Coloca la provincia del contacto",
            trigger: "blur"
          }
        ],
        distrito: [
          {
            required: true,
            message: "Coloca el distrito del contacto",
            trigger: "blur"
          }
        ],
        lugarTrabajo: [
          {
            required: true,
            message: "Coloca el lugar de trabajo del contacto",
            trigger: "blur"
          }
        ],
        teléfono: [
          {
            required: true,
            message: "Coloca el teléfono del contacto",
            trigger: "blur"
          }
        ],
        permanencia: [
          {
            required: true,
            message: "Coloca la permanencia del contacto",
            trigger: "blur"
          }
        ]
      },
      formRegistroBasico: {
        nombre: "",
        edad: "",
        sexo: "",
        lugarNacimiento: "",
        domicilio: "",
        departamento: "",
        ocupacion: "",
        celular: "",
        viajes: "",
        apellido: "",
        correo: "",
        fechaNacimiento: "",
        estadoCivil: "",
        provincia: "",
        distrito: "",
        lugarTrabajo: "",
        telefono: "",
        permanencia: "",
        comentarios: ""
      },
      sexoList: [
        { id: "0", nombre: "Femenino" },
        { id: "1", nombre: "Masculino" }
      ],
      estadoCivilList: [
        { id: "0", nombre: "Soltero(a)" },
        { id: "1", nombre: "Casado(a)" },
        { id: "2", nombre: "Viudo(a)" },
        { id: "3", nombre: "Divorcido(a)" },
        { id: "4", nombre: "Conviviente" }
      ],
      departamentoList: [],
      provinciaList: [],
      distritoList: []
    };
  },

  computed: mapState({
    guardarGlobal: state => state.donacion.guardarformularioBasico,
    etapaGlobal: state => state.app.etapaDonacion_id
  }),

  watch: {
    guardarGlobal() {
      this.guardar("formRegistroBasico");
    }
  },

  created: function() {
    this.getDepartamentos();
  },

  methods: {
    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("etapa_id", me.etapaGlobal);
          fd.append("nombres", me.formRegistroBasico.nombre);
          fd.append("edad", me.formRegistroBasico.edad);
          fd.append("sexo", me.formRegistroBasico.sexo);
          fd.append("lugarNacimiento", me.formRegistroBasico.lugarNacimiento);
          fd.append("domicilio", me.formRegistroBasico.domicilio);
          fd.append("departamento_id", me.formRegistroBasico.departamento);
          fd.append("ocupacion", me.formRegistroBasico.ocupacion);
          fd.append("celular", me.formRegistroBasico.celular);
          fd.append("viajes", me.formRegistroBasico.viajes);
          fd.append("celular", me.formRegistroBasico.celular);
          fd.append("viajes", me.formRegistroBasico.viajes);
          fd.append("apellidos", me.formRegistroBasico.apellido);
          fd.append("correo", me.formRegistroBasico.correo);
          fd.append("fechaNacimiento", moment(me.formRegistroBasico.fechaNacimiento).format("YYYY-MM-DD"));
          fd.append("estadoCivil", me.formRegistroBasico.estadoCivil);
          fd.append("provincia_id", me.formRegistroBasico.provincia);
          fd.append("distrito_id", me.formRegistroBasico.distrito);
          fd.append("lugarTrabajo", me.formRegistroBasico.lugarTrabajo);
          fd.append("telefono", me.formRegistroBasico.telefono);
          fd.append("permanencia", me.formRegistroBasico.permanencia);
          fd.append("comentarios", me.formRegistroBasico.comentarios);
          axios
            .post("/registroBasico/crear", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "La segunda fase del proceso fue guardada con éxito.",
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
    },

    getDepartamentos: async function() {
      this.departamentoList = [];
      this.formRegistroBasico.departamento = "";
      this.provinciaList = [];
      this.formRegistroBasico.provincia = "";
      this.distritoList = [];
      this.formRegistroBasico.distrito = "";
      this.departamentoList = await ubicacion.getDepartamentos();
    },

    getProvincias: async function(departamento_id) {
      this.provinciaList = [];
      this.formRegistroBasico.provincia = "";
      this.distritoList = [];
      this.formRegistroBasico.distrito = "";
      this.provinciaList = await ubicacion.getProvincias(departamento_id);
    },

    getDistritos: async function(provincia_id) {
      this.distritoList = [];
      this.formRegistroBasico.distrito = "";
      this.distritoList = await ubicacion.getDistritos(provincia_id);
    }
  }
};
</script>
