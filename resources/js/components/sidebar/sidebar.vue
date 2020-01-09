<template>
  <div>
    <!-- <el-button @click="isCollapse=!isCollapse" :style="'background-color:'+variables.menuColor+';border:0px;border-radius:0px;width:64px'">
        <i class="fas fa-bars" style="color:white"></i>
    </el-button>-->
    <el-menu
      style="height:100%"
      class="el-menu-vertical-demo"
      :background-color="variables.menuColor"
      text-color="#fff"
      @open="handleOpen"
      @close="handleClose"
      :collapse="isCollapse"
    >
      <router-link to="/">
        <el-menu-item index="1">
          <i class="fas fa-chart-line"></i>
          <span slot="title">Dashboard</span>
        </el-menu-item>
      </router-link>
      <router-link to="/contactos">
        <el-menu-item index="2">
          <i class="fas fa-address-book"></i>
          <span slot="title">Contactos</span>
        </el-menu-item>
      </router-link>
      <router-link to="/mensajeria">
        <el-menu-item index="3">
          <i class="fas fa-comment-dots"></i>
          <span slot="title">Listas de mensajería</span>
        </el-menu-item>
      </router-link>
      <router-link to="/tareas">
        <el-menu-item index="4">
          <i class="fas fa-tasks"></i>
          <span slot="title">Mis tareas</span>
        </el-menu-item>
      </router-link>
      <router-link to="/donacion">
        <el-menu-item index="5">
          <i class="fas fa-notes-medical"></i>
          <span slot="title">Gestor de donación</span>
        </el-menu-item>
      </router-link>
      <router-link to="/usuarios">
        <el-menu-item index="5">
          <i class="fas fa-shield-alt"></i>
          <span slot="title">Gestor de usuarios</span>
        </el-menu-item>
      </router-link>
      <!-- <router-link to="/usuarios">
        <el-menu-item index="2">
          <i class="fas fa-shield-alt"></i>
          <span slot="title">Gestor de usuarios</span>
        </el-menu-item>
      </router-link> -->
      <!-- <el-submenu index="2">
        <template slot="title">
          <i class="fas fa-shield-alt"></i>
          <span slot="title">Permisos y Usuarios</span>
        </template>
        <el-menu-item-group>
          <router-link to="/usuarios">
            <el-menu-item index="2-1">Gestor de usuarios</el-menu-item>
          </router-link>
          <router-link to="/permisos">
            <el-menu-item index="2-2">Gestor de permisos</el-menu-item>
          </router-link>
        </el-menu-item-group>
      </el-submenu> -->
      <!-- <el-submenu index="3">
        <template slot="title">
          <i class="el-icon-location"></i>
          <span slot="title">Navigator One</span>
        </template>
        <el-menu-item-group>
          <span slot="title">Group One</span>
          <el-menu-item index="1-1">item one</el-menu-item>
          <el-menu-item index="1-2">item two</el-menu-item>
        </el-menu-item-group>
        <el-menu-item-group title="Group Two">
          <el-menu-item index="1-3">item three</el-menu-item>
        </el-menu-item-group>
        <el-submenu index="1-4">
          <span slot="title">item four</span>
          <el-menu-item index="1-4-1">item one</el-menu-item>
        </el-submenu>
      </el-submenu> -->
      <a href="/logout">
        <el-menu-item index="6">
          <i class="fas fa-sign-out-alt"></i>
          <span slot="title">Cerrar Sesión</span>
        </el-menu-item>
      </a>
    </el-menu>
  </div>
</template>

<style>
.el-menu-vertical-demo:not(.el-menu--collapse) {
  width: 200px;
  min-height: 400px;
}
.router-link-exact-active *{
  color: #3c8ddf !important;
}

/* .el-submenu.is-active .el-submenu__title .i {
  color: #3c8ddf !important;
} */

a {
  text-decoration: none;
}

.is-active .el-submenu__title i {
    color: #f4f4f5 !important;
}
.el-menu-item.is-active {
    color: #909399;
}

</style>

<script>
import variables from "../../../sass/variables.scss";
export default {
  data() {
    return {
      isCollapse: true
    };
  },
  computed: {
    variables() {
      return variables;
    }
  },
  methods: {
    handleOpen(key, keyPath) {
      console.log(key, keyPath);
    },
    handleClose(key, keyPath) {
      console.log(key, keyPath);
    }
  }
};
</script>