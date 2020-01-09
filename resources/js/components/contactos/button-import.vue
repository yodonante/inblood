<template>
  <div>
    <el-button type="primary" @click="dialogVisible = true" icon="el-icon-upload" plain>Importar</el-button>
    <el-dialog
      title="Importar contactos"
      :visible.sync="dialogVisible"
      width="30%"
      :before-close="handleClose"
    >
      <el-upload
        class="upload-demo"
        ref="upload"
        drag
        action="/persona/importar"
        :before-upload="importarContactos"
        :auto-upload="false"
        :limit="1"
        :on-exceed="limiteExcedido"
      >
        <i class="el-icon-upload"></i>
        <div class="el-upload__text">
          Suelta tu archivo aquí o
          <em>haz clic para cargar</em>
        </div>
        <div slot="tip" class="el-upload__tip">Solo archivos xlsx/xls con un tamaño menor de 1mb</div>
      </el-upload>
      <span slot="footer" class="dialog-footer">
        <el-button @click="dialogVisible = false">Cerrar</el-button>
        <el-button type="primary" @click="submitUpload();dialogVisible = false">Importar</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import { mapState } from "vuex";

export default {
  data() {
    return {
      dialogVisible: false,
      nombreArchivo: ""
    };
  },

  methods: {
    importarContactos(archivo) {
      let me = this;
      const fd = new FormData();
      if (this.validarArchivo(archivo) == 0) {
        return false;
      }
      fd.append("archivo", archivo);
      axios
        .post("/persona/importar", fd)
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
          console.log(response.data);
        })
        .catch(function(error) {
          console.log(error);
          me.$notify.error({
            title: "Error en la creación del usuario",
            message: "Contacta a nuestro equipo técnico."
          });
        });
      return false;
    },

    validarArchivo(file) {
      if (file.size > 2000000) {
        this.$message.error("El archivo debe pesar menos de 2 MB");
        return 0;
      } else {
        if (
          file.type !=
          "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
        ) {
          if (file.type != "application/vnd.ms-excel") {
            this.$message.error("El archivo debe ser de tipo xlsx*/xls*");
            return 0;
          } else {
            return 1;
          }
        } else {
          return 1;
        }
      }
    },

    handleClose(done) {
      this.$confirm("¿Estás seguro de cerrar este menú?")
        .then(_ => {
          done();
        })
        .catch(_ => {});
    },

    limiteExcedido() {
      this.$message.warning("El límite es de 1 archivo por carga");
    },

    submitUpload() {
      this.$refs.upload.submit();
    }
  }
};
</script>