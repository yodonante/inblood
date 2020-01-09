<template>
  <div>
    <el-button type="primary" @click="dialogVisible = true" icon="el-icon-caret-bottom" plain>Filtro</el-button>
    <el-dialog title="Filtro" :visible.sync="dialogVisible" width="30%" :before-close="handleClose" :close-on-click-modal="false">
      <el-row>
        <el-col :span="24">
          <el-select v-model="filtroSelected" placeholder="Item a filtrar">
            <el-option
              v-for="item in filtros"
              :key="item.id"
              :label="item.nombre"
              :value="item.nombre"
            ></el-option>
          </el-select>
        </el-col>
      </el-row>
      <el-row style="margin-top:15px">
        <el-col :span="24">
          <el-input placeholder="Valor deseado" v-model="valor"></el-input>
        </el-col>
      </el-row>
      <span slot="footer" class="dialog-footer">
        <el-button @click="dialogVisible = false">Cancelar</el-button>
        <el-button type="primary" @click="dialogVisible = false; filtrar()">Filtrar</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import { mapState, mapMutations } from "vuex";
export default {
  props:{
    filtros:'',
  },
  data() {
    return {
      dialogVisible: false,
      filtroList: [],
      filtroSelected:'',
      valor:'',
    };
  },

  methods: {
    ...mapMutations(["agregarFiltro"]),
    handleClose(done) {
      this.$confirm("¿Estás seguro de cerrar este menú?")
        .then(_ => {
          done();
        })
        .catch(_ => {});
    },

    filtrar(){
      var filtro = [this.filtroSelected, this.valor];
      this.agregarFiltro(filtro);
      this.valor = '';
      this.filtroSelected = '';
    }
  }
};
</script>