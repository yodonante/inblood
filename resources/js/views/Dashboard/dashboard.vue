<template>
  <el-row>
    <el-row :gutter="40">
      <el-col :xs="12" :sm="12" :lg="6">
        <card
          :titulo="'Donantes disponibles'"
          :icono="'fas fa-user'"
          :valor="donantesRegistrados"
          :color="'color-celeste'"
        ></card>
      </el-col>
      <el-col :xs="12" :sm="12" :lg="6">
        <card
          :titulo="'Demanda'"
          :icono="'fas fa-heartbeat'"
          :valor="30"
          :color="'color-verde'"
        ></card>
      </el-col>
      <el-col :xs="12" :sm="12" :lg="6">
        <card
          :titulo="'Nuevos leads'"
          :icono="'fas fa-user-tag'"
          :valor="donantesRegistrados-1"
          :color="'color-rojo'"
        ></card>
      </el-col>
      <el-col :xs="12" :sm="12" :lg="6">
        <card
          :titulo="'Donaciones efectivas'"
          :icono="'fas fa-clipboard-check'"
          :valor="2"
          :color="'color-azul'"
        ></card>
      </el-col>
    </el-row>
    <el-row :gutter="20">
      <el-col :span="6">
        <div>
          <canvas id="chartDonacionesPorDia" width="100" height="100"></canvas>
        </div>
      </el-col>
      <el-col :span="6">
        <div>
          <canvas id="chartDonantesPorTipoSangre" width="100" height="100"></canvas>
        </div>
      </el-col>
      <el-col :span="12">
        <el-card class="box-card" shadow="hover" style="max-height: 340px;overflow-y: auto !important;">
            <slotCitas/>
        </el-card>
      </el-col>
    </el-row>
    <el-row :gutter="20">
      <el-col :span="6">
        <div>
          <canvas id="chartDonantesPorDia" width="100" height="100"></canvas>
        </div>
      </el-col>
      <el-col :span="6">
        <div>
          <canvas id="chartDonantesPorEtapaInbound" width="100" height="100"></canvas>
        </div>
      </el-col>
    </el-row>
  </el-row>
</template>

<script>
import card from "../../components/card/card.vue";
import slotCitas from "../../components/estadisticas/slotCitas.vue";
import moment from "moment";
import "chart.js/dist/Chart.min.js";
export default {
  components: { card,slotCitas },
  data() {
    return {
      donantesRegistrados: 0,
      donacionesRealizadas: 0
    };
  },
  created: function() {
    this.mostrarchartDonacionesPorDia();
    this.mostrarChartDonantesPorTipoSangre();
    this.mostrarchartDonantesPorDia();
    this.mostrarChartDonantesPorEstadoInbound();
    this.getDonantesRegistrados();
    this.getDonacionesRealizadas();
  },
  methods: {
    getDonantesRegistrados: function() {
      var url = "/estadistica/donantes";
      axios.get(url).then(response => {
        this.donantesRegistrados = response.data;
      });
    },
    getDonacionesRealizadas: function() {
      var url = "/estadistica/donaciones";
      axios.get(url).then(response => {
        this.donacionesRealizadas = response.data;
      });
    },
    mostrarchartDonacionesPorDia: function() {
      moment.locale("es");
      let me = this;
      var url = "/estadistica/donacionesPorDia";
      axios.get(url).then(response => {
        var respuesta = response.data;
        var ctx = document
          .getElementById("chartDonacionesPorDia")
          .getContext("2d");
        var myChart = new Chart(ctx, {
          type: "line",
          data: {
            labels: [
              moment(respuesta[0].dia).format("dddd DD,MMM"),
              moment(respuesta[1].dia).format("dddd DD,MMM"),
              moment(respuesta[2].dia).format("dddd DD,MMM"),
              moment(respuesta[3].dia).format("dddd DD,MMM"),
              moment(respuesta[4].dia).format("dddd DD,MMM"),
              moment(respuesta[5].dia).format("dddd DD,MMM"),
              moment(respuesta[6].dia).format("dddd DD,MMM")
            ],
            datasets: [
              {
                label: "#donaciones por día",
                data: [
                  respuesta[0].cantidadDonaciones,
                  respuesta[1].cantidadDonaciones,
                  respuesta[2].cantidadDonaciones,
                  respuesta[3].cantidadDonaciones,
                  respuesta[4].cantidadDonaciones,
                  respuesta[5].cantidadDonaciones,
                  respuesta[6].cantidadDonaciones
                ],
                backgroundColor: ["rgba(204, 102, 110, 0.4)"],
                borderColor: ["rgba(204, 102, 110, 0.8)"],
                borderWidth: 2
              }
            ]
          },
          options: {
            scales: {
              yAxes: [
                {
                  ticks: {
                    beginAtZero: true
                  }
                }
              ]
            },
            tension: 0
          }
        });
      });
    },
    mostrarChartDonantesPorTipoSangre: function() {
      let me = this;
      var url = "/estadistica/donantesPorTipoSangre";
      axios.get(url).then(response => {
        var respuesta = response.data;
        var ctx = document
          .getElementById("chartDonantesPorTipoSangre")
          .getContext("2d");
        var myChart = new Chart(ctx, {
          type: "polarArea",
          data: {
            labels: [
              respuesta[0].tipoSangre,
              respuesta[1].tipoSangre,
              respuesta[2].tipoSangre,
              respuesta[3].tipoSangre,
              respuesta[4].tipoSangre,
              respuesta[5].tipoSangre,
              respuesta[6].tipoSangre,
              respuesta[7].tipoSangre,
              respuesta[8].tipoSangre
            ],
            datasets: [
              {
                label: "#donantes por tipo de sangre",
                data: [
                  respuesta[0].cantidadDonantes,
                  respuesta[1].cantidadDonantes,
                  respuesta[2].cantidadDonantes,
                  respuesta[3].cantidadDonantes,
                  respuesta[4].cantidadDonantes,
                  respuesta[5].cantidadDonantes,
                  respuesta[6].cantidadDonantes,
                  respuesta[7].cantidadDonantes,
                  respuesta[8].cantidadDonantes
                ],
                backgroundColor: [
                  "rgba(197, 54, 63, 0.6)",
                  "rgba(204, 102, 110, 0.4)",
                  "rgba(6, 87, 201, 0.6)",
                  "rgba(33, 150, 243, 0.4)",
                  "rgba(76, 175, 80, 0.4)",
                  "rgba(35, 184, 41, 0.6)",
                  "rgba(253, 216, 53, 0.4)",
                  "rgba(248, 203, 4, 0.6)"
                ],
                borderColor: [
                  "rgba(204, 102, 110, 0.8)",
                  "rgba(204, 102, 110, 0.8)",
                  "rgba(33, 150, 243, 0.8)",
                  "rgba(33, 150, 243, 0.8)",
                  "rgba(76, 175, 80, 0.8)",
                  "rgba(76, 175, 80, 0.8)",
                  "rgba(253, 216, 53, 0.8)",
                  "rgba(253, 216, 53, 0.8)"
                ],
                borderWidth: 2
              }
            ]
          }
        });
      });
    },
    mostrarchartDonantesPorDia: function() {
      moment.locale("es");
      let me = this;
      var url = "/estadistica/donantesPorDia";
      axios.get(url).then(response => {
        var respuesta = response.data;
        var ctx = document
          .getElementById("chartDonantesPorDia")
          .getContext("2d");
        var myChart = new Chart(ctx, {
          type: "line",
          data: {
            labels: [
              moment(respuesta[0].dia).format("dddd DD,MMM"),
              moment(respuesta[1].dia).format("dddd DD,MMM"),
              moment(respuesta[2].dia).format("dddd DD,MMM"),
              moment(respuesta[3].dia).format("dddd DD,MMM"),
              moment(respuesta[4].dia).format("dddd DD,MMM"),
              moment(respuesta[5].dia).format("dddd DD,MMM"),
              moment(respuesta[6].dia).format("dddd DD,MMM")
            ],
            datasets: [
              {
                label: "#donantes por día",
                data: [
                  respuesta[0].cantidadDonantes,
                  respuesta[1].cantidadDonantes,
                  respuesta[2].cantidadDonantes,
                  respuesta[3].cantidadDonantes,
                  respuesta[4].cantidadDonantes,
                  respuesta[5].cantidadDonantes,
                  respuesta[6].cantidadDonantes
                ],
                backgroundColor: ["rgba(204, 102, 110, 0.4)"],
                borderColor: ["rgba(204, 102, 110, 0.8)"],
                borderWidth: 2
              }
            ]
          },
          options: {
            scales: {
              yAxes: [
                {
                  ticks: {
                    beginAtZero: true
                  }
                }
              ]
            },
            tension: 0
          }
        });
      });
    },
    mostrarChartDonantesPorEstadoInbound: function() {
      let me = this;
      var url = "/estadistica/donantesPorEtapaInbound";
      axios.get(url).then(response => {
        var respuesta = response.data;
        var ctx = document
          .getElementById("chartDonantesPorEtapaInbound")
          .getContext("2d");
        var myChart = new Chart(ctx, {
          type: "polarArea",
          data: {
            labels: [
              respuesta[0].etapa,
              respuesta[1].etapa,
              respuesta[2].etapa,
              respuesta[3].etapa,
            ],
            datasets: [
              {
                label: "#donantes por tipo de sangre",
                data: [
                  respuesta[0].cantidadDonantes,
                  respuesta[1].cantidadDonantes,
                  respuesta[2].cantidadDonantes,
                  respuesta[3].cantidadDonantes,
                ],
                backgroundColor: [
                  "rgba(197, 54, 63, 0.6)",
                  "rgba(204, 102, 110, 0.4)",
                  "rgba(6, 87, 201, 0.6)",
                  "rgba(33, 150, 243, 0.4)",
                  "rgba(76, 175, 80, 0.4)",
                  "rgba(35, 184, 41, 0.6)",
                  "rgba(253, 216, 53, 0.4)",
                  "rgba(248, 203, 4, 0.6)"
                ],
                borderColor: [
                  "rgba(204, 102, 110, 0.8)",
                  "rgba(204, 102, 110, 0.8)",
                  "rgba(33, 150, 243, 0.8)",
                  "rgba(33, 150, 243, 0.8)",
                  "rgba(76, 175, 80, 0.8)",
                  "rgba(76, 175, 80, 0.8)",
                  "rgba(253, 216, 53, 0.8)",
                  "rgba(253, 216, 53, 0.8)"
                ],
                borderWidth: 2
              }
            ]
          }
        });
      });
    }
  }
};
</script>
