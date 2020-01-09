<template>
  <div>
    <el-dialog :visible.sync="modalPermiso" :title="titulo" width="70%" :show-close="false">
      <el-form label-position="right">
        <el-row>
          <el-col :md="24" :sm="24" :xs="24">
            <el-form-item label="Nombre" :label-width="formLabelWidth">
              <el-input v-model="nombre" autocomplete="off"></el-input>
            </el-form-item>
          </el-col>
          <!-- <el-col :md="24" :sm="24" :xs="24">
            <el-form-item label="Descripción" :label-width="formLabelWidth">
              <el-input v-model="descripcion" type="textarea" autocomplete="off"
               :autosize="{ minRows: 2, maxRows: 4}"></el-input>
            </el-form-item>
          </el-col> -->
        </el-row>
        <el-row>
            <el-col :md="24" :sm="24" :xs="24">
            <el-form-item label="Permisos" :label-width="formLabelWidth">
              <permisos></permisos>
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
      <span slot="footer" class="dialog-footer">
        <el-button @click="mostrarOcultarModalPermiso">Cancelar</el-button>
        <el-button type="primary" @click="guardar()">Confirm</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
import permisos from "./permisosSeleccionables";

export default {
  name: "modalPermisos",
  components: { permisos },
  data() {
    return {
      titulo: "",
      formLabelWidth: "100px",
      nombre: "",
      descripcion: ""
    };
  },
  computed: mapState({
    modalPermiso: state => state.forms.modalPermiso,
    permisoGlobal: state => state.forms.permiso
  }),

  watch: {
    permisoGlobal() {
      this.mostrarModalPermiso();
    }
  },
  methods: {
    ...mapMutations(["mostrarOcultarModalPermiso"]),
    mostrarModalPermiso() {
      this.email = this.permisoGlobal.email;
      this.password = this.permisoGlobal.password;
      this.sexo = this.permisoGlobal.sexo;
      this.sangre = this.permisoGlobal.sangre;
      this.factor = this.permisoGlobal.factor;
      this.rol = this.permisoGlobal.rol;
      this.nombre = this.permisoGlobal.nombre;
      this.apellido = this.permisoGlobal.apellido;
      this.dni = this.permisoGlobal.dni;
      this.fechaNacimiento = this.permisoGlobal.fechaNacimiento;
      this.distrito = this.permisoGlobal.distrito;

      if (this.permisoGlobal.length == 0) {
        this.titulo = "Nuevo permiso";
      } else {
        this.titulo = "Editar permiso";
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
      fd.append("dni", me.dni);
      fd.append("fechaNacimiento", me.fechaNacimiento);
      fd.append("tipo_usuario", me.rol);
      fd.append("distrito_id", me.distrito);
      axios
        .post("/persona/crear", fd)
        .then(function(response) {
          if (response.data == "Ok") {
            this.$notify({
              title: "Usuario creado",
              message: "El usuario fue creado con éxito.",
              type: "success"
            });
          } else {
            this.$notify.error({
              title: "Error al crear el usuario",
              message: "Vuelve a intentar crear el usuario."
            });
          }
        })
        .catch(function(error) {
          console.log(error);
          this.$notify.error({
            title: "Error en la creación del usuario",
            message: "Contacta a nuestro equipo técnico."
          });
        });
      this.mostrarModalUsuario();
    },

    editar: function() {
      let me = this;
      const fd = new FormData();
      fd.append("email", correoYodonante);
      fd.append("password", me.password);
      fd.append("sexo", me.sexo);
      fd.append("sangre", me.sangre);
      fd.append("factor", me.factor);
      fd.append("nombre", me.nombre);
      fd.append("apellido", me.apellido);
      fd.append("dni", me.dni);
      fd.append("fechaNacimiento", me.fechaNacimiento);
      fd.append("tipo_usuario", me.rol);
      fd.append("distrito_id", me.distrito);
      axios
        .post("/usuario/editar", fd)
        .then(function(response) {
          if (response.data == "Ok") {
            this.$notify({
              title: "Usuario editado",
              message: "El usuario fue editado con éxito.",
              type: "success"
            });
          } else {
            this.$notify.error({
              title: "Error  al editar el usuario",
              message: "Vuelve a intentar editar el usuario."
            });
          }
        })
        .catch(function(error) {
          console.log(error);
          this.$notify.error({
            title: "Error en la edición del usuario",
            message: "Contacta a nuestro equipo técnico."
          });
        });
    }
  }
};
</script>