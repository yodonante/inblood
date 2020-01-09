<template>
  <el-row style="margin-top:20px">
    <el-col :xs="{span: 22, push:1 }" :sm="{span: 20, push:2 }" :md="{span: 12, push:6 }">
      <el-card>
          <el-row style="margin-bottom:20px">
            <el-col :sm="{span:12, push:7}" :xs="{span:24}">
                <h2>REGISTRO DE DONANTES</h2>
            </el-col>
          </el-row>
        <el-form
          label-position="right"
          :rules="reglas"
          ref="formContacto"
          class="formContacto"
          :model="formContacto"
        >
          <el-row>
            <el-col :md="24" :xs="24">
              <el-form-item label="Correo" :label-width="formLabelWidth" prop="email">
                <el-input
                  v-model="formContacto.email"
                  autocomplete="off"
                  placeholder="¿Cuál es tu e-mail?"
                ></el-input>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row>
            <el-col :md="10" :xs="24">
              <el-form-item label="Sexo" :label-width="formLabelWidth" prop="sexo">
                <el-select v-model="formContacto.sexo" placeholder="Selecciona">
                  <el-option
                    v-for="item in sexoList"
                    :key="item.id"
                    :label="item.nombre"
                    :value="item.id"
                  ></el-option>
                </el-select>
              </el-form-item>
            </el-col>
            <el-col :md="14" :xs="24">
              <el-form-item label="Celular" :label-width="formLabelWidth" prop="celular">
                <el-input
                  v-model="formContacto.celular"
                  autocomplete="off"
                  placeholder="¿Cuál es tu número de celular?"
                  maxlength="9"
                  show-word-limit
                  type="text"
                ></el-input>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row>
            <el-col :md="12" :xs="24">
              <el-form-item label="T. Sangre" :label-width="formLabelWidth" prop="sangre">
                <el-select v-model="formContacto.sangre" placeholder="Selecciona el tipo de sangre">
                  <el-option
                    v-for="item in sangreList"
                    :key="item.id"
                    :label="item.nombre"
                    :value="item.nombre"
                  ></el-option>
                </el-select>
              </el-form-item>
            </el-col>
            <el-col :md="12" :xs="24">
              <el-form-item label="Factor" :label-width="formLabelWidth">
                <el-select
                  v-model="formContacto.factor"
                  placeholder="Selecciona el factor de sangre"
                  :disabled="formContacto.sangre=='Desconocido'"
                >
                  <el-option
                    v-for="item in factorList"
                    :key="item.id"
                    :label="item.nombre"
                    :value="item.nombre"
                  ></el-option>
                </el-select>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row>
            <el-col :md="24" :sm="24" :xs="24">
              <el-form-item label="Nombre" :label-width="formLabelWidth" prop="nombre">
                <el-input v-model="formContacto.nombre" autocomplete="off"></el-input>
              </el-form-item>
            </el-col>
            <el-col :md="24" :sm="24" :xs="24">
              <el-form-item label="Apellido" :label-width="formLabelWidth" prop="apellido">
                <el-input v-model="formContacto.apellido" autocomplete="off"></el-input>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row>
            <el-col :md="12" :xs="24">
              <el-form-item label="DNI" :label-width="formLabelWidth" prop="dni">
                <el-input
                  v-model="formContacto.dni"
                  autocomplete="off"
                  maxlength="8"
                  type="text"
                  show-word-limit
                ></el-input>
              </el-form-item>
            </el-col>
            <el-col :md="12" :xs="24">
              <el-form-item label="Nacimiento" :label-width="formLabelWidth" prop="fechaNacimiento">
                <el-date-picker
                  v-model="formContacto.fechaNacimiento"
                  type="date"
                  placeholder="Fecha de Nacimiento"
                ></el-date-picker>
              </el-form-item>
            </el-col>
            <el-col :md="8" :xs="24">
              <el-form-item
                label="Rol"
                :label-width="formLabelWidth"
                v-if="formContacto.rol!='donante'"
                prop="rol"
              >
                <el-select v-model="formContacto.rol" placeholder="Selecciona">
                  <el-option
                    v-for="item in rolList"
                    :key="item.id"
                    :label="item.name"
                    :value="item.name"
                  ></el-option>
                </el-select>
              </el-form-item>
            </el-col>
          </el-row>
          <el-row>
            <el-col :md="12" :xs="24">
              <el-form-item
                label="Última donación"
                :label-width="'130px'"
                prop="fecha_ultima_donacion"
              >
                <el-select
                  v-model="formContacto.fecha_ultima_donacion"
                  placeholder="Selecciona"
                >
                  <el-option
                    v-for="item in fechaDonacionList"
                    :key="item.id"
                    :label="item.nombre"
                    :value="item.id"
                  ></el-option>
                </el-select>
              </el-form-item>
            </el-col>
            <el-col :md="12" :xs="24">
                <el-form-item label="Departamento" :label-width="'120px'" prop="departamento">
                <el-select
                  v-model="formContacto.departamento"
                  placeholder="Selecciona"
                  @change="getProvincias(formContacto.departamento)"
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
          </el-row>
          <el-row>
            <el-col :md="12" :xs="24">
              <el-form-item label="Provincia" :label-width="formLabelWidth" prop="provincia">
                <el-select
                  v-model="formContacto.provincia"
                  placeholder="Selecciona"
                  @change="getDistritos(formContacto.provincia)"
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
            <el-col :md="12" :xs="24">
              <el-form-item label="Distrito" :label-width="formLabelWidth" prop="distrito">
                <el-select v-model="formContacto.distrito" placeholder="Selecciona">
                  <el-option
                    v-for="item in distritoList"
                    :key="item.id"
                    :label="item.nombre"
                    :value="item.id"
                  ></el-option>
                </el-select>
              </el-form-item>
            </el-col>
          </el-row>
        </el-form>
        <el-row type="flex" justify="center" style="margin-top:20px">
            <el-col>
                <el-button @click="guardar('formContacto')" style="width:100%;background-color: #c7626b;border-color: #c7626b;" type="primary">REGISTRARSE</el-button>
            </el-col>
        </el-row>
      </el-card>
    </el-col>
  </el-row>
</template>

<script>
import moment from "moment";
import variables from "../../../sass/variables.scss";
import ubicacion from "../../util/ubicacion.js";
export default {
  name: "form-publico-contactos",
  data() {
    return {
      formContacto: {
        email: "",
        password: '',
        sexo: "",
        sangre: "",
        factor: "",
        celular: "",
        rol: "donante",
        nombre: "",
        apellido: "",
        dni: "",
        fechaNacimiento: "",
        departamento: "",
        provincia: "",
        distrito: "",
        contacto_id: "",
        fecha_proxima_donacion: "",
        fecha_ultima_donacion: "",
        inbound_estado_id: "1"
      },
      formLabelWidth: "100px",
      titulo: "",
      roles: [],
      sexoList: [
        { id: "0", nombre: "Femenino" },
        { id: "1", nombre: "Masculino" }
      ],
      fechaDonacionList: [
        { id: "0", nombre: "Hace 1 mes" },
        { id: "1", nombre: "Hace 3 meses" },
        { id: "2", nombre: "Hace 6 mes" },
        { id: "3", nombre: "Hace 1 año" },
        { id: "4", nombre: "Hace 3 años" },
        { id: "5", nombre: "Nunca he donado" },
      ],
      sangreList: [
        { id: "1", nombre: "A" },
        { id: "2", nombre: "B" },
        { id: "3", nombre: "AB" },
        { id: "4", nombre: "O" },
        { id: "5", nombre: "Desconocido" }
      ],
      estadoInboundList: [],
      factorList: [{ id: "1", nombre: "+" }, { id: "2", nombre: "-" }],
      reglas: {
        email: [
          {
            required: true,
            message: "Coloca el correo que tendrá el contacto",
            trigger: "blur"
          },
          {
            min: 5,
            max: 250,
            message: "El contacto debe tener entre 5 y 250 caracteres",
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
        sangre: [
          {
            required: true,
            message: "Coloca el tipo sangre del contacto",
            trigger: "blur"
          }
        ],
        celular: [
          {
            required: true,
            message: "Coloca el número de celular del contacto",
            trigger: "blur"
          },
          {
            min: 9,
            max: 9,
            message: "El celular debe tener 9 caracteres",
            trigger: "blur"
          }
        ],
        nombre: [
          {
            required: true,
            message: "Coloca nombre del contacto",
            trigger: "blur"
          },
          {
            min: 3,
            max: 250,
            message: "El nombre debe tener entre 3 y 250 caracteres",
            trigger: "blur"
          }
        ],
        apellido: [
          {
            required: true,
            message: "Coloca apellido del contacto",
            trigger: "blur"
          },
          {
            min: 3,
            max: 250,
            message: "El apellido debe tener entre 3 y 250 caracteres",
            trigger: "blur"
          }
        ],
        dni: [
          {
            required: true,
            message: "Coloca el DNI del contacto",
            trigger: "blur"
          },
          {
            min: 8,
            max: 8,
            message: "El DNI debe tener 8 caracteres",
            trigger: "blur"
          }
        ],
        fechaNacimiento: [
          {
            required: true,
            message: "Coloca fechaNacimiento del contacto",
            trigger: "blur"
          }
        ],
        departamento: [
          {
            required: true,
            message: "Coloca departamento de residencia del contacto",
            trigger: "blur"
          }
        ],
        provincia: [
          {
            required: true,
            message: "Coloca provincia de residencia del contacto",
            trigger: "blur"
          }
        ],
        distrito: [
          {
            required: true,
            message: "Coloca distrito de residencia del contacto",
            trigger: "blur"
          }
        ],
        fecha_ultima_donacion: [
          {
            required: true,
            message: "Coloca cuándo fue la última vez que donaste sangre",
            trigger: "blur"
          }
        ],
      },
      rolList: [],
      departamentoList: [],
      provinciaList: [],
      distritoList: []
    };
  },
  created: function() {
    this.getDepartamentos();
  },
  computed: {
    variables() {
      return variables;
    }
  },
  methods: {
    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          var correoYodonante = me.formContacto.email;
          me.formContacto.password = me.formContacto.dni;
          var distrito = me.formContacto.distrito;
          var factor = "";
          if (me.formContacto.distrito.toString().length == 5) {
            distrito = "0" + me.formContacto.distrito;
          } else {
            distrito = me.formContacto.distrito;
          }
          if (me.formContacto.sangre == "Desconocido") {
            factor = "Vacío";
          } else {
            factor = me.formContacto.factor;
          }
          var ultimaDonacion = "";
          var proximaDonacion = "";
          if (me.formContacto.fecha_ultima_donacion != "") {
            if (me.formContacto.fecha_ultima_donacion != null) {
              if(me.formContacto.fecha_ultima_donacion == 0){
                  ultimaDonacion = moment().subtract(1, 'months').format("YYYY-MM-DD");
              }
              if(me.formContacto.fecha_ultima_donacion == 1){
                  ultimaDonacion = moment().subtract(3, 'months').format("YYYY-MM-DD");
              }
              if(me.formContacto.fecha_ultima_donacion == 2){
                  ultimaDonacion = moment().subtract(6, 'months').format("YYYY-MM-DD");
              }
              if(me.formContacto.fecha_ultima_donacion == 3){
                  ultimaDonacion = moment().subtract(1, 'years').format("YYYY-MM-DD");
              }
              if(me.formContacto.fecha_ultima_donacion == 4){
                  ultimaDonacion = moment().subtract(3, 'years').format("YYYY-MM-DD");
              }
              if(me.formContacto.fecha_ultima_donacion == 5){
                  ultimaDonacion = "";
              }
            } else {
              ultimaDonacion = "";
            }
          } else {
            ultimaDonacion = "";
          }
          if (me.formContacto.fecha_proxima_donacion != "") {
            if (me.formContacto.fecha_proxima_donacion != null) {
              proximaDonacion = moment(
                me.formContacto.fecha_proxima_donacion
              ).format("YYYY-MM-DD");
            } else {
              proximaDonacion = "";
            }
          } else {
            proximaDonacion = "";
          }
          fd.append("email", correoYodonante);
          fd.append("password", me.formContacto.password);
          fd.append("sexo", me.formContacto.sexo);
          fd.append("sangre", me.formContacto.sangre);
          fd.append("factor", factor);
          fd.append("nombre", me.formContacto.nombre);
          fd.append("apellido", me.formContacto.apellido);
          fd.append("celular", me.formContacto.celular);
          fd.append("fecha_ultima_donacion", ultimaDonacion);
          fd.append("fecha_proxima_donacion", proximaDonacion);
          fd.append("dni", me.formContacto.dni);
          fd.append("inbound_estado_id", me.formContacto.inbound_estado_id);
          fd.append(
            "fechaNacimiento",
            moment(me.formContacto.fechaNacimiento).format("YYYY-MM-DD")
          );
          fd.append("tipo_usuario", me.formContacto.rol);
          fd.append("distrito_id", distrito);
          axios
            .post("/persona/crearPublico", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Usuario creado",
                  message: "El usuario fue creado con éxito.",
                  type: "success"
                });
                window.location="http://bloodify.yodonante.com/gracias";
              } else {
                me.$notify.error({
                  title: "Error al crear el usuario",
                  message: "Vuelve a intentar crear el usuario."
                });
                console.log(response.data);
              }
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la creación del usuario",
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
      this.formContacto.departamento = "";
      this.provinciaList = [];
      this.formContacto.provincia = "";
      this.distritoList = [];
      this.formContacto.distrito = "";
      this.departamentoList = await ubicacion.getDepartamentos();
    },

    getProvincias: async function(departamento_id) {
      this.provinciaList = [];
      this.formContacto.provincia = "";
      this.distritoList = [];
      this.formContacto.distrito = "";
      this.provinciaList = await ubicacion.getProvincias(departamento_id);
    },

    getDistritos: async function(provincia_id) {
      this.distritoList = [];
      this.formContacto.distrito = "";
      this.distritoList = await ubicacion.getDistritos(provincia_id);
    },
  }
};
</script>
