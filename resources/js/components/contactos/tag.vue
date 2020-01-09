<template>
  <div>
    <el-tag
      :key="tag.id"
      v-for="tag in filtrosTag"
      closable
      :disable-transitions="false"
      @close="handleClose(tag)"
    >{{tag.nombre}}</el-tag>
  </div>
</template>

<style>
.el-tag + .el-tag {
  margin-left: 10px;
}
</style>

<script>
import { mapState, mapMutations } from "vuex";
export default {
  data() {
    return {
      filtrosTag: []
    };
  },

  computed: mapState({
    filtrosGlobal: state => state.filtroContacto.filtros,
    filtrosChange: state => state.filtroContacto.filtrosChange,
  }),
  
  watch:{
    filtrosChange(){
      this.filtrosTag = [];
      var j = 0;
      for (let i = 0; i < this.filtrosGlobal.length; i++) {
        var indice = Object.keys(this.filtrosGlobal[i]);
        if(this.filtrosGlobal[i][indice]!=""){
          this.filtrosTag.push({id: j, nombre: indice + " : " + this.filtrosGlobal[i][indice], indice: indice[0] });
          j++;
        }
      }
    }
  },
  methods: {
    ...mapMutations(["quitarFiltro"]),
    handleClose(tag) {
      this.filtrosTag.splice(this.filtrosTag.indexOf(tag), 1);
      this.quitarFiltro(tag);
    }
  }
};
</script>