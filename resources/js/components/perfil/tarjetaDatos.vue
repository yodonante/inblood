<template>
  <el-row>
    <el-row type="flex" justify="center">
      <el-col :span="24">
        <h2
          style="text-align: center"
          v-text="contacto.nombre + ' ' + contacto.apellido"
        ></h2>
      </el-col>
    </el-row>
    <el-divider>
      <i class="el-icon-user-solid"></i>
    </el-divider>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Celular:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.celular"></p>
      </el-col>
    </el-row>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Correo:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.email"></p>
      </el-col>
    </el-row>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>DNI:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.dni"></p>
      </el-col>
    </el-row>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Tipo de sangre:</h4>
      </el-col>
      <el-col :span="10" v-if="contacto.factor != 'Desconocido'">
        <p v-text="contacto.sangre + contacto.factor"></p>
      </el-col>
      <el-col :span="10" v-else>
        <p v-text="contacto.sangre"></p>
      </el-col>
    </el-row>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Sexo:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.sexo?'Masculino':'Femenino'"></p>
      </el-col>
    </el-row>
    <el-divider>
      <i class="el-icon-map-location"></i>
    </el-divider>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Departamento:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.departamento"></p>
      </el-col>
    </el-row>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Provincia:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.provincia"></p>
      </el-col>
    </el-row>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Distrito:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.distrito"></p>
      </el-col>
    </el-row>
    <el-divider>
      <i class="el-icon-map-location"></i>
    </el-divider>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Última fecha de donación:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.fecha_ultima_donacion"></p>
      </el-col>
    </el-row>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Próxima fecha de donación:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.fecha_proxima_donacion"></p>
      </el-col>
    </el-row>
    <el-row style="margin-top:3px">
      <el-col :span="10">
        <h4>Estado inbound:</h4>
      </el-col>
      <el-col :span="10">
        <p v-text="contacto.inbound_estados"></p>
      </el-col>
    </el-row>
  </el-row>
</template>

<script>
export default {
  props: {
    contacto: {}
  },
  data() {
    return {};
  },
  methods: {}
};
</script>

