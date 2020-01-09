<template>
  <div>
    <el-dialog
      :visible.sync="modalContacto"
      :title="titulo"
      width="75%"
      fullscreen
      :show-close="false"
    >
      <el-form
        label-position="right"
        :rules="reglas"
        ref="formContacto"
        class="formContacto"
        :model="formContacto"
      >
        <el-row>
          <el-col :md="12" :xs="24">
            <el-form-item label="Correo" :label-width="formLabelWidth" prop="email">
              <el-input
                v-model="formContacto.email"
                autocomplete="off"
                :disabled="titulo=='Editar usuario'"
              >
                <!-- <template slot="append">@yodonante.com</template> -->
              </el-input>
            </el-form-item>
          </el-col>
          <el-col :md="12" :xs="24" v-if="titulo=='Nuevo usuario'">
            <el-form-item label="Contraseña" :label-width="formLabelWidth" prop="password">
              <el-input
                v-model="formContacto.password"
                autocomplete="off"
                show-password
                placeholder="Verifica la contraseña antes de aceptar"
              ></el-input>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :md="6" :xs="24">
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
          <el-col :md="6" :xs="24">
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
          <el-col :md="6" :xs="24">
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
          <el-col :md="6" :xs="24">
            <el-form-item label="Celular" :label-width="formLabelWidth" prop="celular">
              <el-input
                v-model="formContacto.celular"
                autocomplete="off"
                placeholder="Escribe el celular de contacto"
                maxlength="9"
                show-word-limit
                type="text"
              ></el-input>
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
          <el-col :md="8" :sm="24" :xs="24">
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
          <el-col :md="8" :sm="24" :xs="24">
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
          <el-col :md="8" :sm="24" :xs="24">
            <el-form-item
              label="Última donación"
              :label-width="'130px'"
              prop="fecha_ultima_donacion"
            >
              <el-date-picker
                v-model="formContacto.fecha_ultima_donacion"
                type="date"
                placeholder="Fecha de última donación"
              ></el-date-picker>
            </el-form-item>
          </el-col>
          <el-col :md="8" :sm="24" :xs="24">
            <el-form-item
              label="Próxima donación"
              :label-width="'130px'"
              prop="fecha_proxima_donacion"
            >
              <el-date-picker
                v-model="formContacto.fecha_proxima_donacion"
                type="date"
                placeholder="Fecha de próxima donación"
              ></el-date-picker>
            </el-form-item>
          </el-col>
          <el-col :md="8" :sm="24" :xs="24">
            <el-form-item label="Estado Inbound" :label-width="'130px'" prop="inbound_estado_id">
              <el-select v-model="formContacto.inbound_estado_id" placeholder="Selecciona">
                <el-option
                  v-for="item in estadoInboundList"
                  :key="item.id"
                  :label="item.nombre"
                  :value="item.id"
                ></el-option>
              </el-select>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :md="8" :xs="24">
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
          <el-col :md="8" :xs="24">
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
          <el-col :md="8" :xs="24">
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
      <span slot="footer" class="dialog-footer">
        <el-button @click="mostrarOcultarModalContacto">Cancelar</el-button>
        <el-button
          type="primary"
          @click="guardar('formContacto')"
          v-if="titulo=='Nuevo contacto'"
        >Crear contacto</el-button>
        <el-button type="primary" @click="editar('formContacto')" v-else>Editar contacto</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import moment from "moment";
import ubicacion from "../../util/ubicacion.js";
export default {
  name: "modalContactos",
  introduction: "Formulario de contactos",
  description:
    "Formulario que permite la creación y edición de contactos. Todos los campos son obligatorios.",
  token: "<modalContactos></modalContactos>",
  data() {
    return {
      formContacto: {
        email: "",
        password: "",
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
        inbound_estado_id: ""
      },
      formLabelWidth: "100px",
      titulo: "",
      roles: [],
      sexoList: [
        { id: "0", nombre: "Femenino" },
        { id: "1", nombre: "Masculino" }
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
        password: [
          {
            required: true,
            message: "Coloca la contraseña que tendrá el contacto",
            trigger: "blur"
          },
          {
            min: 6,
            max: 250,
            message: "La contraseña debe tener entre 6 y 250 caracteres",
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
        rol: [
          {
            required: true,
            message: "Coloca rol que tendrá el contacto",
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
        inbound_estado_id: [
          {
            required: true,
            message: "Coloca el estado Inbound del contacto",
            trigger: "blur"
          }
        ]
      },
      rolList: [],
      departamentoList: [],
      provinciaList: [],
      distritoList: []
    };
  },
  computed: mapState({
    modalContacto: state => state.forms.modalContacto,
    contactoGlobal: state => state.forms.contacto
  }),

  watch: {
    contactoGlobal() {
      if (this.modalContacto == true) {
        this.mostrarModalContacto();
      }
    }
  },
  created: function() {
    this.getRoles();
    this.getDepartamentos();
    this.getEstadoInbound();
  },
  methods: {
    ...mapMutations(["mostrarOcultarModalContacto"]),

    mostrarModalContacto() {
      this.formContacto.email = this.contactoGlobal.email;
      this.formContacto.password = this.contactoGlobal.password;
      this.formContacto.sexo = this.contactoGlobal.sexo;
      if (this.contactoGlobal.sangre == "Desconocido") {
        this.formContacto.sangre = "Desconocido";
      } else {
        this.formContacto.sangre = this.contactoGlobal.sangre;
        this.formContacto.factor = this.contactoGlobal.factor;
      }
      this.formContacto.rol = "donante";
      this.formContacto.nombre = this.contactoGlobal.nombre;
      this.formContacto.apellido = this.contactoGlobal.apellido;
      this.formContacto.dni = this.contactoGlobal.dni;
      this.formContacto.fechaNacimiento = this.contactoGlobal.fechaNacimiento;
      this.formContacto.departamento = this.contactoGlobal.departamento;
      this.formContacto.provincia = this.contactoGlobal.provincia;
      this.formContacto.distrito = this.contactoGlobal.distrito_id;
      if (this.contactoGlobal.length == 0) {
        this.titulo = "Nuevo contacto";
        this.formContacto.rol = "donante";
      } else {
        this.titulo = "Editar contacto";
        this.formContacto.contacto_id = this.contactoGlobal.id;
        this.formContacto.sexo = this.contactoGlobal.sexo.toString();
        this.formContacto.departamento = parseInt(
          this.contactoGlobal.departamento
        );
        this.provinciaList = this.getProvincias(
          this.contactoGlobal.departamento
        );
        this.formContacto.provincia = parseInt(this.contactoGlobal.provincia);
        this.distritoList = this.getDistritos(this.contactoGlobal.provincia);
        this.formContacto.distrito = parseInt(this.contactoGlobal.distrito_id);
        this.formContacto.celular = this.contactoGlobal.celular;
        this.formContacto.fecha_ultima_donacion = this.contactoGlobal.fecha_ultima_donacion;
        this.formContacto.fecha_proxima_donacion = this.contactoGlobal.fecha_proxima_donacion;
        this.formContacto.inbound_estado_id = this.contactoGlobal.inbound_estado_id;
        this.formContacto.email = this.contactoGlobal.email;
        // var emailSinArroba = "";
        // for (var i = 0; i < this.contactoGlobal.email.length + 1; i++) {
        //   if (this.contactoGlobal.email.substring(i, i + 1) == "@") {
        //     this.formContacto.email = emailSinArroba;
        //     return;
        //   }
        //   emailSinArroba += this.contactoGlobal.email.substring(i, i + 1);
        // }
      }
    },

    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          // var correoYodonante = me.formContacto.email + "@yodonante.com";
          var correoYodonante = me.formContacto.email;
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
              ultimaDonacion = moment(
                me.formContacto.fecha_ultima_donacion
              ).format("YYYY-MM-DD");
            }else{
              ultimaDonacion = "";
            }
          }else{
            ultimaDonacion = "";
          }
          if (me.formContacto.fecha_proxima_donacion != "") {
            if (me.formContacto.fecha_proxima_donacion != null) {
              proximaDonacion = moment(
                me.formContacto.fecha_proxima_donacion
              ).format("YYYY-MM-DD");
            }else{
              proximaDonacion = "";
            }
          }else{
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
            .post("/persona/crear", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "Usuario creado",
                  message: "El usuario fue creado con éxito.",
                  type: "success"
                });
                console.log(response.data);
              } else {
                me.$notify.error({
                  title: "Error al crear el usuario",
                  message: "Vuelve a intentar crear el usuario."
                });
                console.log(response.data);
              }
              me.mostrarOcultarModalContacto();
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

    editar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          var correoYodonante = me.formContacto.email + "@yodonante.com";
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
              ultimaDonacion = moment(
                me.formContacto.fecha_ultima_donacion
              ).format("YYYY-MM-DD");
            }else{
              ultimaDonacion = "";
            }
          }else{
            ultimaDonacion = "";
          }
          if (me.formContacto.fecha_proxima_donacion != "") {
            if (me.formContacto.fecha_proxima_donacion != null) {
              proximaDonacion = moment(
                me.formContacto.fecha_proxima_donacion
              ).format("YYYY-MM-DD");
            }else{
              proximaDonacion = "";
            }
          }else{
            proximaDonacion = "";
          }
          const fd = new FormData();
          fd.append("id", me.formContacto.contacto_id);
          fd.append("email", correoYodonante);
          fd.append("sexo", me.formContacto.sexo);
          fd.append("sangre", me.formContacto.sangre);
          fd.append("factor", factor);
          fd.append("nombre", me.formContacto.nombre);
          fd.append("apellido", me.formContacto.apellido);
          fd.append("celular", me.formContacto.celular);
          fd.append("dni", me.formContacto.dni);
          fd.append("inbound_estado_id", me.formContacto.inbound_estado_id);
          fd.append(
            "fechaNacimiento",
            moment(me.formContacto.fechaNacimiento).format("YYYY-MM-DD")
          );
          fd.append("tipo_usuario", me.formContacto.rol);
          fd.append("distrito_id", distrito);
          fd.append("fecha_ultima_donacion", ultimaDonacion);
          fd.append("fecha_proxima_donacion", proximaDonacion);
          axios
            .post("/persona/editar", fd)
            .then(function(response) {
              console.log(response.data);
              if (response.data == "Ok") {
                console.log(response.data);
                me.$notify({
                  title: "Usuario editado",
                  message: "El usuario fue editado con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al editar el usuario",
                  message: "Vuelve a intentar editar el usuario."
                });
              }
              me.mostrarOcultarModalContacto();
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error en la edición del usuario",
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

    getRoles: function() {
      let me = this;
      var url = "/rol/listar";
      axios.get(url).then(response => {
        me.rolList = response.data;
      });
    },

    getEstadoInbound: function() {
      let me = this;
      var url = "/inboundEstado/listar";
      axios.get(url).then(response => {
        me.estadoInboundList = response.data;
      });
    }
  }
};
</script>