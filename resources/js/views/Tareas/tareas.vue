<template>
  <el-row :gutter="20">
    <el-col :sm="24">
      <tablaTareas></tablaTareas>
      <modalTareas></modalTareas>
    </el-col>
  </el-row>
</template>

<script>
import tablaTareas from "../../components/tareas/tablaTareas";
import modalTareas from "../../components/tareas/modalTareas";

export default {
  components: {
    tablaTareas,
    modalTareas
  },
  data() {
    return {};
  }
};
</script>
