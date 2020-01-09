<template>
  <el-row class="panel-group">
    <el-col class="card-panel-col">
      <div class="card-panel">
        <div class="card-panel-icon-wrapper" :class="col">
          <i style="font-size:50px" :class="icon"></i>
        </div>
        <div class="card-panel-description">
          <div class="card-panel-text" v-text="title"></div>
          <count-to :start-val="0" :end-val="val" :duration="2600" class="card-panel-num"/>
        </div>
      </div>
    </el-col>
  </el-row>
</template>

<script>
import CountTo from "vue-count-to";

export default {
  name: "card",
  components: {
    CountTo
  },
  props : {
    icono : '',
    titulo : '',
    valor : '',
    color : ''
  },
  data (){
    return  {
        icon : this.icono,
        title : this.titulo,
        val : this.valor,
        col : this.color
    }
  },
  watch:{
    valor(){
      this.val = this.valor;
    },
  }
};
</script>

<style rel="stylesheet/scss" lang="scss" scoped>
.panel-group {
  margin-top: 18px;
  .card-panel-col {
    margin-bottom: 32px;
  }
  .card-panel {
    height: 108px;
    cursor: pointer;
    font-size: 12px;
    position: relative;
    overflow: hidden;
    color: #666;
    background: #fff;
    box-shadow: 4px 4px 40px rgba(0, 0, 0, 0.05);
    border-color: rgba(0, 0, 0, 0.05);
    &:hover {
      .card-panel-icon-wrapper {
        color: #fff;
      }
      .color-celeste {
        background: #40c9c6;
      }
      .color-azul {
        background: #36a3f7;
      }
      .color-rojo {
        background: #f4516c;
      }
      .color-verde {
        background: #34bfa3;
      }
    }
    .color-celeste {
      color: #40c9c6;
    }
    .color-azul {
      color: #36a3f7;
    }
    .color-rojo {
      color: #f4516c;
    }
    .color-verde {
      color: #34bfa3;
    }
    .card-panel-icon-wrapper {
      float: left;
      margin: 14px 0 0 14px;
      padding: 16px;
      transition: all 0.38s ease-out;
      border-radius: 6px;
    }
    .card-panel-icon {
      float: left;
      font-size: 48px;
    }
    .card-panel-description {
      float: right;
      font-weight: bold;
      margin: 26px;
      margin-left: 0px;
      .card-panel-text {
        line-height: 18px;
        color: rgba(0, 0, 0, 0.45);
        font-size: 16px;
        margin-bottom: 12px;
      }
      .card-panel-num {
        font-size: 20px;
      }
    }
  }
}
</style>

