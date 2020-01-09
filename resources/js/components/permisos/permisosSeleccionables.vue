<template>
  <el-tree
    :data="todosPermisos"
    show-checkbox
    node-key="id"
    :props="defaultProps"
    @check-change="handleCheckChange"
  ></el-tree>
  <!-- :default-expanded-keys="[2, 3]"
  :default-checked-keys="[5]"-->
</template>


<script>
export default {
  data() {
    return {
      todosPermisos: [],
      selected :[],
      defaultProps: {
        children: "children",
        label: "label"
      }
    };
  },
  created: function() {
    this.listar();
  },
  methods: {
    listar: function() {
      let me = this;
      var url = "/permiso/listar";
      var permisos;
      axios.get(url).then(response => {
        permisos = response.data;
        permisos.forEach(permiso => {
          var permisoNuevo = { id: permiso.id, label: permiso.name };
          me.todosPermisos.push(permisoNuevo);
        });
      });
    },

    handleCheckChange(data, checked, indeterminate) {
      if(checked == true){
        this.selected.push(data);
      }else{
        var i =0;
        this.selected.forEach(seleccionado => {
          
          if(seleccionado.id == data.id){
            this.selected.splice(i,1);
          }
          i++;
        });
      }
    },
    
    handleNodeClick(data) {
      console.log(data);
    }
  }
};
</script>