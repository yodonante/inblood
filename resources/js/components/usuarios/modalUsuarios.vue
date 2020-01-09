<template>
  <div>
    <el-dialog
      :visible.sync="modalUsuario"
      :title="titulo"
      width="70%"
      :show-close="false"
      fullscreen
    >
      <el-form label-position="right">
        <el-row>
          <el-col :md="12" :xs="24">
            <el-form-item label="Correo" :label-width="formLabelWidth">
              <el-input v-model="email" autocomplete="off" :disabled="titulo=='Editar usuario'">
                <template slot="append">@yodonante.com</template>
              </el-input>
            </el-form-item>
          </el-col>
          <el-col :md="12" :xs="24" v-if="titulo=='Nuevo usuario'">
            <el-form-item label="Contraseña" :label-width="formLabelWidth">
              <el-input
                v-model="password"
                autocomplete="off"
                show-password
                placeholder="Verifica la contraseña antes de aceptar"
              ></el-input>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :md="8" :xs="24">
            <el-form-item label="Sexo" :label-width="formLabelWidth">
              <el-select v-model="sexo" placeholder="Selecciona">
                <el-option
                  v-for="item in sexoList"
                  :key="item.id"
                  :label="item.nombre"
                  :value="item.id"
                ></el-option>
              </el-select>
            </el-form-item>
          </el-col>
          <el-col :md="8" :xs="24">
            <el-form-item label="T. Sangre" :label-width="formLabelWidth">
              <el-select v-model="sangre" placeholder="Selecciona el tipo de sangre">
                <el-option
                  v-for="item in sangreList"
                  :key="item.id"
                  :label="item.nombre"
                  :value="item.nombre"
                ></el-option>
              </el-select>
            </el-form-item>
          </el-col>
          <el-col :md="8" :xs="24">
            <el-form-item label="Factor" :label-width="formLabelWidth">
              <el-select
                v-model="factor"
                placeholder="Selecciona el factor de sangre"
                :disabled="sangre=='Desconocido'"
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
            <el-form-item label="Nombre" :label-width="formLabelWidth">
              <el-input v-model="nombre" autocomplete="off"></el-input>
            </el-form-item>
          </el-col>
          <el-col :md="24" :sm="24" :xs="24">
            <el-form-item label="Apellido" :label-width="formLabelWidth">
              <el-input v-model="apellido" autocomplete="off"></el-input>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :md="8" :sm="24" :xs="24">
            <el-form-item label="DNI" :label-width="formLabelWidth">
              <el-input v-model="dni" autocomplete="off"></el-input>
            </el-form-item>
          </el-col>
          <el-col :md="8" :sm="24" :xs="24">
            <el-form-item label="Nacimiento" :label-width="formLabelWidth">
              <el-date-picker
                v-model="fechaNacimiento"
                type="date"
                placeholder="Fecha de Nacimiento"
              ></el-date-picker>
            </el-form-item>
          </el-col>
          <el-col :md="8" :xs="24">
            <el-form-item label="Rol" :label-width="formLabelWidth">
              <el-select v-model="rol" placeholder="Selecciona">
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
          <el-col :md="8" :xs="24">
            <el-form-item label="Departamento" :label-width="formLabelWidth">
              <el-select
                v-model="departamento"
                placeholder="Selecciona"
                @change="getProvincias(departamento)"
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
            <el-form-item label="Provincia" :label-width="formLabelWidth">
              <el-select
                v-model="provincia"
                placeholder="Selecciona"
                @change="getDistritos(provincia)"
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
            <el-form-item label="Distrito" :label-width="formLabelWidth">
              <el-select v-model="distrito" placeholder="Selecciona">
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
        <el-button @click="mostrarOcultarModalUsuario">Cancelar</el-button>
        <el-button type="primary" @click="guardar()" v-if="titulo=='Nuevo usuario'">Crear usuario</el-button>
        <el-button type="primary" @click="editar()" v-else>Editar usuario</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import moment from "moment";
import ubicacion from "../../util/ubicacion.js";
export default {
  name: "modalUsuarios",
  introduction: "Formulario de usuarios",
  description:
    "Formulario que permite la creación y edición de usuarios. Todos los campos son obligatorios.",
  token: "<modalUsuarios></modalUsuarios>",
  data() {
    return {
      email: "",
      password: "",
      sexo: "",
      sangre: "",
      factor: "",
      rol: "",
      nombre: "",
      apellido: "",
      dni: "",
      fechaNacimiento: "",
      departamento: "",
      provincia: "",
      distrito: "",
      usuario_id: "",
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
      factorList: [{ id: "1", nombre: "+" }, { id: "2", nombre: "-" }],
      rolList: [],
      departamentoList: [],
      provinciaList: [],
      distritoList: []
    };
  },
  computed: mapState({
    modalUsuario: state => state.forms.modalUsuario,
    usuarioGlobal: state => state.forms.usuario
  }),

  watch: {
    usuarioGlobal() {
      if (this.modalUsuario == true) {
        this.mostrarModalUsuario();
      }
    }
  },
  created: function() {
    this.getRoles();
    this.getDepartamentos();
  },
  methods: {
    ...mapMutations(["mostrarOcultarModalUsuario"]),

    mostrarModalUsuario() {
      this.email = this.usuarioGlobal.email;
      this.password = this.usuarioGlobal.password;
      this.sexo = this.usuarioGlobal.sexo;
      if (this.usuarioGlobal.sangre == "Desconocido") {
        this.sangre = "Desconocido";
      } else {
        this.sangre = this.usuarioGlobal.sangre;
        this.factor = this.usuarioGlobal.factor;
      }
      this.rol = this.usuarioGlobal.rol;
      this.nombre = this.usuarioGlobal.nombre;
      this.apellido = this.usuarioGlobal.apellido;
      this.dni = this.usuarioGlobal.dni;
      this.fechaNacimiento = this.usuarioGlobal.fechaNacimiento;
      this.departamento = this.usuarioGlobal.departamento;
      this.provincia = this.usuarioGlobal.provincia;
      this.distrito = this.usuarioGlobal.distrito;
      if (this.usuarioGlobal.length == 0) {
        this.titulo = "Nuevo usuario";
      } else {
        this.titulo = "Editar usuario";
        this.usuario_id = this.usuarioGlobal.id;
        this.sexo = this.usuarioGlobal.sexo.toString();
        this.departamento = parseInt(this.usuarioGlobal.departamento);
        this.provinciaList = this.getProvincias(
          this.usuarioGlobal.departamento
        );
        this.provincia = parseInt(this.usuarioGlobal.provincia);
        this.distritoList = this.getDistritos(this.usuarioGlobal.provincia);
        this.distrito = parseInt(this.usuarioGlobal.distrito);

        var emailSinArroba = "";
        for (var i = 0; i < this.usuarioGlobal.email.length + 1; i++) {
          if (this.usuarioGlobal.email.substring(i, i + 1) == "@") {
            this.email = emailSinArroba;
            return;
          }
          emailSinArroba += this.usuarioGlobal.email.substring(i, i + 1);
        }
      }
    },

    guardar: function() {
      let me = this;
      const fd = new FormData();
      var correoYodonante = me.email + "@yodonante.com";
      fd.append("email", correoYodonante);
      fd.append("password", me.password);
      fd.append("sexo", me.sexo);
      fd.append("sangre", me.sangre);
      fd.append("factor", me.factor);
      fd.append("nombre", me.nombre);
      fd.append("apellido", me.apellido);
      fd.append("celular", "11111111");
      fd.append("inbound_estado_id", "1");
      fd.append("dni", me.dni);
      fd.append(
        "fechaNacimiento",
        moment(me.fechaNacimiento).format("YYYY-MM-DD")
      );
      fd.append("tipo_usuario", me.rol);
      fd.append("distrito_id", me.distrito);
      axios
        .post("/persona/crear", fd)
        .then(function(response) {
          if (response.data == "Ok") {
            me.$notify({
              title: "Usuario creado",
              message: "El usuario fue creado con éxito.",
              type: "success"
            });
          } else {
            me.$notify.error({
              title: "Error al crear el usuario",
              message: "Vuelve a intentar crear el usuario."
            });
          }
          me.mostrarOcultarModalUsuario();
        })
        .catch(function(error) {
          console.log(error);
          me.$notify.error({
            title: "Error en la creación del usuario",
            message: "Contacta a nuestro equipo técnico."
          });
        });
    },

    editar: function() {
      let me = this;
      const fd = new FormData();
      fd.append("id", me.usuario_id);
      fd.append("email", me.email);
      fd.append("sexo", me.sexo);
      fd.append("sangre", me.sangre);
      fd.append("factor", me.factor);
      fd.append("nombre", me.nombre);
      fd.append("apellido", me.apellido);
      fd.append("dni", me.dni);
      fd.append("celular", "11111111");
      fd.append("inbound_estado_id", "1");
      fd.append("fechaNacimiento", me.fechaNacimiento);
      fd.append("tipo_usuario", me.rol);
      fd.append("distrito_id", me.distrito);
      axios
        .post("/persona/editar", fd)
        .then(function(response) {
          console.log(response.data);
          if (response.data == "Ok") {
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
          me.mostrarOcultarModalUsuario();
        })
        .catch(function(error) {
          console.log(error);
          me.$notify.error({
            title: "Error en la edición del usuario",
            message: "Contacta a nuestro equipo técnico."
          });
        });
    },

    getDepartamentos: async function() {
      this.departamentoList = [];
      this.departamento = "";
      this.provinciaList = [];
      this.provincia = "";
      this.distritoList = [];
      this.distrito = "";
      this.departamentoList = await ubicacion.getDepartamentos();
    },

    getProvincias: async function(departamento_id) {
      this.provinciaList = [];
      this.provincia = "";
      this.distritoList = [];
      this.distrito = "";
      this.provinciaList = await ubicacion.getProvincias(departamento_id);
    },

    getDistritos: async function(provincia_id) {
      this.distritoList = [];
      this.distrito = "";
      this.distritoList = await ubicacion.getDistritos(provincia_id);
    },

    getRoles: function() {
      let me = this;
      var url = "/rol/listar";
      axios.get(url).then(response => {
        me.rolList = response.data;
      });
    }
  }
};
</script>