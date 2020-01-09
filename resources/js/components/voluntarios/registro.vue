<template>
  <div>
    <el-row type="flex" justify="center" style="height:100vh;padding-top:15vh">
      <el-col :xs="22" :sm="16" :md="10">
        <el-row justify="center" align="center">
          <el-col>
            <p class="encabezado">¡REGÍSTRATE AHORA!</p>
          </el-col>
        </el-row>
        <el-card shadow="hover">
          <el-form
            label-position="right"
            :rules="reglas"
            ref="formVoluntario"
            class="formVoluntario"
            :model="formVoluntario"
          >
            <el-row>
              <el-col>
                <el-form-item label="Nombre" :label-width="'80px'" prop="nombre">
                  <el-input
                    class="input"
                    placeholder="¿Cómo te llamas?"
                    suffix-icon="el-icon-edit"
                    v-model="formVoluntario.nombre"
                  ></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col>
                <el-form-item label="Apellidos" :label-width="'80px'" prop="apellido">
                  <el-input
                    class="input"
                    placeholder="¿Cuáles son tus apellidos?"
                    suffix-icon="el-icon-edit"
                    v-model="formVoluntario.apellido"
                  ></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col>
                <el-form-item label="E-mail" :label-width="'80px'" prop="email">
                  <el-input
                    class="input"
                    placeholder="¿Cuál es tu e-mail?"
                    suffix-icon="el-icon-message"
                    v-model="formVoluntario.email"
                  ></el-input>
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col>
                <el-form-item label="Celular" :label-width="'80px'" prop="celular">
                  <el-input
                    class="input"
                    placeholder="¿Cuál es tu número de celular?"
                    maxlength="9"
                    show-word-limit
                    suffix-icon="el-icon-mobile-phone"
                    v-model="formVoluntario.celular"
                  ></el-input>
                </el-form-item>
              </el-col>
            </el-row>
          </el-form>
          <el-row justify="center" type="flex">
            <el-col>
              <el-button
                type="primary"
                icon="el-icon-s-promotion"
                @click="crear('formVoluntario')"
              >Registrarse</el-button>
            </el-col>
          </el-row>
        </el-card>
      </el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  name: "registroVoluntarios",
  data() {
    return {
      formVoluntario: {
        nombre: "",
        apellido: "",
        email: "",
        celular: ""
      },
      reglas: {
        nombre: [
          {
            required: true,
            message: "Debes colocar tu nombre.",
            trigger: "blur"
          }
        ],
        apellido: [
          {
            required: true,
            message: "Debes colocar tu apellido.",
            trigger: "blur"
          }
        ],
        email: [
          {
            required: true,
            message: "Debes colocar tu email.",
            trigger: "blur"
          }
        ],
        celular: [
          {
            required: true,
            message: "Debes colocar tu celular.",
            trigger: "blur"
          },
          {
            min: 9,
            max: 9,
            message: "El celular debe tener 9 dígitos",
            trigger: "blur"
          }
        ]
      }
    };
  },

  methods: {
    crear: function(formVoluntario) {
      this.$refs[formVoluntario].validate(valid => {
        if (valid) {
          let me = this;
          var url = "/registro-voluntarios/crear";
          const fd = new FormData();
          fd.append("nombre", me.formVoluntario.nombre);
          fd.append("apellido", me.formVoluntario.apellido);
          fd.append("email", me.formVoluntario.email);
          fd.append("celular", me.formVoluntario.celular);
          axios
            .post(url, fd)
            .then(response => {
              if (response.data == "Ok") {
                Swal.fire(
                  "¡Gracias!",
                  "Gracias por registrarte con nosotros para apoyarnos",
                  "success"
                );
              } else {
                if (response.data == "Ya existe") {
                  Swal.fire(
                    "¡Ya estás registrado!",
                    "Este email ya se encuentra registrado",
                    "info"
                  );
                }
              }
              console.log(response.data);
              this.limpiar();
            })
            .catch(error => {
              console.log(error);
            });
        } else {
          return false;
        }
      });
    },

    limpiar: function() {
      this.formVoluntario.nombre = "";
      this.formVoluntario.apellido = "";
      this.formVoluntario.email = "";
      this.formVoluntario.celular = "";
    }
  }
};
</script>
<style lang="scss" scoped>
* {
  box-sizing: border-box;
  font-family: Avenir, Helvetica, Arial, sans-serif;
  outline: none;
  text-transform: none;
  text-decoration: none;
  text-align: center;
}

.encabezado {
  font-size: 25px;
  font-weight: 500;
  color: #484848;
  margin-bottom: 20px;
}
.input {
  margin-bottom: 10px;
}
</style>
