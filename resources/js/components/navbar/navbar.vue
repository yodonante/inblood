<template>
  <div class="navbar">
    <el-breadcrumb class="app-breadcrumb" separator="/">
      <el-breadcrumb-item >
        <b><span class="no-redirect" v-text="'YODONANTE '" style="font-size:16px;"></span></b>
        <span class="no-redirect" v-text="pageUrl"></span>
      </el-breadcrumb-item>
  </el-breadcrumb>
    <div class="right-menu">
    </div>
  </div>
</template>

<script>
export default {
  data(){
    return{

    }
  },
  created:function () {
    this.getUrl(this.pageUrl);
  },
  computed: {
    pageUrl:function () {
      var url = this.$route.path;
      var urlPreparada="";
      var tituloArray = [];
      var indicador = 0;
      for (let i = 0; i < url.length; i++) {
        if(indicador == 1){
          url += " ";
          urlPreparada += url.substring(i, i + 1).toUpperCase();
          indicador = 0;
        }else{
          if (url.substring(i, i + 1) == "/") {
            indicador = 1;
            urlPreparada += " / ";
          }else{
              urlPreparada += url.substring(i, i + 1).toUpperCase();
              indicador = 0;
          }
        }
      }
      return urlPreparada;
    }
  },
  methods:{
    getUrl(url){
      
    }
  }
}
</script>


<style rel="stylesheet/scss" lang="scss" scoped>
.navbar {
  height: 50px;
  overflow: hidden;

  .hamburger-container {
    line-height: 46px;
    height: 100%;
    float: left;
    cursor: pointer;
    transition: background .3s;

    &:hover {
      background: rgba(0, 0, 0, .025)
    }
  }

  .breadcrumb-container {
    float: left;
  }

  .errLog-container {
    display: inline-block;
    vertical-align: top;
  }

  .right-menu {
    float: right;
    height: 100%;
    line-height: 50px;

    &:focus {
      outline: none;
    }

    .right-menu-item {
      display: inline-block;
      padding: 0 8px;
      height: 100%;
      font-size: 18px;
      color: #5a5e66;
      vertical-align: text-bottom;

      &.hover-effect {
        cursor: pointer;
        transition: background .3s;

        &:hover {
          background: rgba(0, 0, 0, .025)
        }
      }
    }

    .avatar-container {
      margin-right: 30px;

      .avatar-wrapper {
        margin-top: 5px;
        position: relative;

        .user-avatar {
          cursor: pointer;
          width: 40px;
          height: 40px;
          border-radius: 10px;
        }

        .el-icon-caret-bottom {
          cursor: pointer;
          position: absolute;
          right: -20px;
          top: 25px;
          font-size: 12px;
        }
      }
    }
  }
  .app-breadcrumb.el-breadcrumb {
    display: inline-block;
    font-size: 14px;
    line-height: 50px;
    margin-left: 8px;
    .no-redirect {
      color: #97a8be;
      cursor: text;
    }
  }
}
</style>
