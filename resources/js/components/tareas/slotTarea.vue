<template>
  <el-row>
    <el-row>
      <el-card shadow="never">
        <el-row :gutter="3">
          <el-col :sm="22">
            <el-input placeholder="Nombre de la tarea" autosize v-model="tarea.nombre" type="textarea" id="nombre">
              <i slot="suffix" class="el-icon-edit el-input__icon"></i>
            </el-input>
          </el-col>
          <el-col :sm="2">
            <el-button type="danger" icon="el-icon-delete" circle plain></el-button>
          </el-col>
        </el-row>
      </el-card>
    </el-row>
    <el-row>
      <el-card shadow="never">
        <el-row>
          <el-date-picker
            v-model="tarea.fecha"
            type="datetime"
            placeholder="Fecha de vencimiento"
            default-time="12:00:00">
          </el-date-picker>
        </el-row>
      </el-card>
    </el-row>
    <el-row>
      <el-card shadow="never">
    <el-row>
      <el-input v-model="tarea.descripcion" placeholder="Agregar una descripción o comentario" :autosize="{ minRows: 2, maxRows: 4}" type="textarea">
        <i slot="suffix" class="el-icon-edit el-input__icon"></i>
      </el-input>
    </el-row>
  </el-card>
    </el-row>
  </el-row>
</template>

<script>
export default {
  name: "tablaContactos",
  components: {},
  data() {
    return {
      tarea: {},
    };
  },

  created: function() {},

  watch: {},

  methods: {}
};
</script>

<style>
#nombre {
  font-size: 18px;
  font-weight:bold;
}
</style>




