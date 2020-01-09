<template>
  <el-card shadow="never">
    <el-steps :active="etapa" finish-status="success" style="margin-bottom:30px">
      <el-step title="Inicio"></el-step>
      <el-step title="Registro"></el-step>
      <el-step title="Examen físico"></el-step>
      <el-step title="Hemograma"></el-step>
      <el-step title="Entrevista"></el-step>
      <el-step title="Donación"></el-step>
      <el-step title="Finalizar"></el-step>
    </el-steps>
    <!---->
    <inicio v-show="etapa==0"></inicio>
    <registroBasico v-show="etapa==1"></registroBasico>
    <registroExamenFisico v-show="etapa==2"></registroExamenFisico>
    <registroHemograma v-show="etapa==3"></registroHemograma>
    <entrevista v-show="etapa==4"></entrevista>
    <donacion v-show="etapa==5"></donacion>
    <donacion v-show="etapa==6"></donacion>
    <!---->
    <el-divider></el-divider>
    <el-row>
      <el-col :span="24" style="float:none; text-align:right">
        <el-button-group>
          <el-button type="primary" icon="el-icon-arrow-left" @click="anteriorEtapa()" :disabled="retrocederHabilitado==false">Retroceder</el-button>
          <el-button
            type="primary"
            :disabled="continuarHabilitado==true"
            :loading="cargarForm"
            @click="botonGuardar()"
          >
            <i class="far fa-save"></i> Guardar
          </el-button>
          <el-button type="primary" :disabled="continuarHabilitado==false" @click="siguienteEtapa()">
            Continuar
            <i class="el-icon-arrow-right"></i>
          </el-button>
        </el-button-group>
      </el-col>
    </el-row>
  </el-card>
</template>

<script>
import { mapMutations } from "vuex";
import inicio from "../../components/donacion/inicio";
import registroBasico from "../../components/donacion/registroBasico";
import registroExamenFisico from "../../components/donacion/registroExamenFisico";
import registroHemograma from "../../components/donacion/registroHemograma";
import entrevista from "../../components/donacion/entrevista";
import donacion from "../../components/donacion/registroDonacion";
import finalizar from "../../components/donacion/finalizar";
export default {
  components: {
    inicio,
    registroBasico,
    registroExamenFisico,
    registroHemograma,
    entrevista,
    donacion,
    finalizar
  },
  data() {
    return {
      continuarHabilitado: false,
      retrocederHabilitado: false,
      cargarForm: false,
      etapa:0,
    };
  },
  methods: {
    ...mapMutations(["guardarFormulario"]),
    botonGuardar: function() {
      this.cargarForm = true;
      this.continuarHabilitado = !this.continuarHabilitado;
      this.cargarForm = false;
      this.guardarFormulario(this.etapa);
    },
    siguienteEtapa:function () {
        if(this.etapa < 6){
            this.etapa++;
            this.retrocederHabilitado = true;
            this.continuarHabilitado = false;
        }else{
            this.etapa = 6;
            this.retrocederHabilitado = true;
            this.continuarHabilitado = false;
        }
    },
    anteriorEtapa:function () {
        if(this.etapa > 0){
            this.etapa--;
            if(this.etapa == 0){
                this.retrocederHabilitado = false;
            }
        }else{
            this.etapa = 0;
            this.retrocederHabilitado = false;
        }
    },
  }
};
</script>
