<template>
  <el-row type="flex" justify="center">
    <el-col :span="22">
      <div>
        <el-card shadow="never">
          <el-form :rules="reglas" ref="formHemograma" :model="formHemograma" label-position="left">
            <el-row :gutter="5">
              <el-col :span="24">
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Hematies" :label-width="'100px'" prop="hematies">
                      <el-input v-model="formHemograma.hematies" autocomplete="off">
                        <template slot="append">mm<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleHematies"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioHematies" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Plaquetas" :label-width="'100px'" prop="plaquetas">
                      <el-input v-model="formHemograma.plaquetas" autocomplete="off">
                        <template slot="append">mm<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumplePlaquetas"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioPlaquetas" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Hemoglobina" :label-width="'100px'" prop="hemoglobina">
                      <el-input v-model="formHemograma.hemoglobina" autocomplete="off">
                        <template slot="append">gr/dl</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleHemoglobina"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioHemoglobina" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Hematocrito" :label-width="'100px'" prop="hematocrito">
                      <el-input v-model="formHemograma.hematocrito" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleHematocrito"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioHematocrito" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="VCM" :label-width="'100px'" prop="vcm">
                      <el-input v-model="formHemograma.vcm" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleVcm"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentariovcm" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="HCM" :label-width="'100px'" prop="hcm">
                      <el-input v-model="formHemograma.hcm" autocomplete="off">
                        <template slot="append">pg</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleHcm"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioHcm" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="CCMH" :label-width="'100px'" prop="ccmh">
                      <el-input v-model="formHemograma.ccmh" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleCcmh"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioCcmh" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Eosinofilos" :label-width="'100px'" prop="eosinofilos">
                      <el-input v-model="formHemograma.eosinofilos" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleEosinofilos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioEosinofilos" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Basofilos" :label-width="'100px'" prop="basofilos">
                      <el-input v-model="formHemograma.basofilos" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleBasofilos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioBasofilos" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Mielocitos" :label-width="'100px'" prop="mielocitos">
                      <el-input v-model="formHemograma.mielocitos" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleMielocitos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioMielocitos" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Metamielocitos" :label-width="'100px'" prop="metamielocitos">
                      <el-input v-model="formHemograma.metamielocitos" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleMetamielocitos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioMetamielocitos" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Abastonados" :label-width="'100px'" prop="abastonados">
                      <el-input v-model="formHemograma.abastonados" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleAbastonados"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioAbastonados" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Segmentados" :label-width="'100px'" prop="segmentados">
                      <el-input v-model="formHemograma.segmentados" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleSegmentados"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioSegmentados" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Linfocitos" :label-width="'100px'" prop="linfocitos">
                      <el-input v-model="formHemograma.linfocitos" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleLinfocitos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioLinfocitos" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Monocitos" :label-width="'100px'" prop="monocitos">
                      <el-input v-model="formHemograma.monocitos" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleMonocitos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioMonocitos" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Eosionofilos" :label-width="'100px'" prop="eosinofilos2">
                      <el-input v-model="formHemograma.eosionofilos2" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleEosinofilos2"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioEosinofilos2" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Basofilos" :label-width="'100px'" prop="basofilos2">
                      <el-input v-model="formHemograma.basofilos2" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleBasofilos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioBasofilos2" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Mielocitos" :label-width="'100px'" prop="mielocitos2">
                      <el-input v-model="formHemograma.mielocitos2" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleMielocitos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioMielocitos2" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Metamielocitos" :label-width="'100px'" prop="metamielocitos2">
                      <el-input v-model="formHemograma.metamielocitos2" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleMetamielocitos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioMetamielocitos2" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Abastonados" :label-width="'100px'" prop="abastonados2">
                      <el-input v-model="formHemograma.abastonados2" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleAbastonados"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioAbastonados2" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Segmentados" :label-width="'100px'" prop="segmentados2">
                      <el-input v-model="formHemograma.segmentados2" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleSegmentados"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioSegmentados2" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Linfocitos" :label-width="'100px'" prop="linfocitos2">
                      <el-input v-model="formHemograma.linfocitos2" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleLinfocitos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioLinfocitos2" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Monocitos" :label-width="'100px'" prop="monocitos2">
                      <el-input v-model="formHemograma.monocitos2" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleMonocitos"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioMonocitos2" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Recuento total" :label-width="'120px'" prop="recuento">
                      <el-input v-model="formHemograma.recuento" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleRecuento"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioRecuento" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Otros" :label-width="'100px'" prop="otros">
                      <el-input v-model="formHemograma.otros" autocomplete="off">
                        <template slot="append">%</template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleOtros"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioOtros" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
                <el-row :gutter="10">
                  <el-col :span="10">
                    <el-form-item label="Otros" :label-width="'100px'" prop="otros2">
                      <el-input v-model="formHemograma.otros2" autocomplete="off">
                        <template slot="append">um<sup>3</sup></template>
                      </el-input>
                    </el-form-item>
                  </el-col>
                  <el-col :span="6">
                    <el-form-item>
                      <el-switch
                        v-model="formHemograma.cumpleOtros2"
                        active-text="Sí cumple"
                        inactive-text="No cumple"
                      ></el-switch>
                    </el-form-item>
                  </el-col>
                  <el-col :span="8">
                    <el-form-item>
                      <el-input v-model="formHemograma.comentarioOtros2" placeholder="Comentarios" autocomplete="off"/>
                    </el-form-item>
                  </el-col>
                </el-row>
              </el-col>
            </el-row>
          </el-form>
        </el-card>
      </div>
    </el-col>
  </el-row>
</template>

<script>
import { mapState } from "vuex";
export default {
  data() {
    return {
      reglas: {
        hematies: [
          {
            required: true,
            message: "Coloca el valor de hematies",
            trigger: "blur"
          }
        ],
        cumpleHematies: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de hematies",
            trigger: "blur"
          }
        ],
        plaquetas: [
          {
            required: true,
            message: "Coloca el valor de plaquetas",
            trigger: "blur"
          }
        ],
        cumplePlaquetas: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de plaquetas",
            trigger: "blur"
          }
        ],
        hemoglobina: [
          {
            required: true,
            message: "Coloca el valor de hemoglobina",
            trigger: "blur"
          }
        ],
        cumpleHemoglobina: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de hemoglobina",
            trigger: "blur"
          }
        ],
        hematocrito: [
          {
            required: true,
            message: "Coloca el valor de hematocrito",
            trigger: "blur"
          }
        ],
        cumpleHematocrito: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de hematocrito",
            trigger: "blur"
          }
        ],
        vcm: [
          {
            required: true,
            message: "Coloca el valor de VCM",
            trigger: "blur"
          }
        ],
        cumpleVcm: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de VCM",
            trigger: "blur"
          }
        ],
        hcm: [
          {
            required: true,
            message: "Coloca el valor de HCM",
            trigger: "blur"
          }
        ],
        cumpleHcm: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de HCM",
            trigger: "blur"
          }
        ],
        ccmh: [
          {
            required: true,
            message: "Coloca el valor de CCMH",
            trigger: "blur"
          }
        ],
        cumpleCcmh: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de CCMH",
            trigger: "blur"
          }
        ],
        eosinofilos: [
          {
            required: true,
            message: "Coloca el valor de eosinofilos",
            trigger: "blur"
          }
        ],
        cumpleEosinofilos: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de eosinofilos",
            trigger: "blur"
          }
        ],
        basofilos: [
          {
            required: true,
            message: "Coloca el valor de basofilos",
            trigger: "blur"
          }
        ],
        cumpleBasofilos: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de basofilos",
            trigger: "blur"
          }
        ],
        mielocitos: [
          {
            required: true,
            message: "Coloca el valor de mielocitos",
            trigger: "blur"
          }
        ],
        cumpleMielocitos: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de mielocitos",
            trigger: "blur"
          }
        ],
        metamielocitos: [
          {
            required: true,
            message: "Coloca el valor de metamielocitos",
            trigger: "blur"
          }
        ],
        cumpleMetamielocitos: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de metamielocitos",
            trigger: "blur"
          }
        ],
        abastonados: [
          {
            required: true,
            message: "Coloca el valor de abastonados",
            trigger: "blur"
          }
        ],
        cumpleAbastonados: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de abastonados",
            trigger: "blur"
          }
        ],
        segmentados: [
          {
            required: true,
            message: "Coloca el valor de segmentados",
            trigger: "blur"
          }
        ],
        cumpleSegmentados: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de segmentados",
            trigger: "blur"
          }
        ],
        linfocitos: [
          {
            required: true,
            message: "Coloca el valor de linfocitos",
            trigger: "blur"
          }
        ],
        cumpleLinfocitos: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de linfocitos",
            trigger: "blur"
          }
        ],
        monocitos: [
          {
            required: true,
            message: "Coloca el valor de monocitos",
            trigger: "blur"
          }
        ],
        cumpleMonocitos: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de monocitos",
            trigger: "blur"
          }
        ],
        eosinofilos2: [
          {
            required: true,
            message: "Coloca el valor de eosinofilos",
            trigger: "blur"
          }
        ],
        cumpleEosinofilos2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de eosinofilos",
            trigger: "blur"
          }
        ],
        cumpleEosinofilos2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de eosinofilos",
            trigger: "blur"
          }
        ],
        basofilos2: [
          {
            required: true,
            message: "Coloca el valor de basofilos",
            trigger: "blur"
          }
        ],
        cumpleBasofilos2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de basofilos",
            trigger: "blur"
          }
        ],
        mielocitos2: [
          {
            required: true,
            message: "Coloca el valor de mielocitos",
            trigger: "blur"
          }
        ],
        cumpleMielocitos2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de mielocitos",
            trigger: "blur"
          }
        ],
        metamielocitos2: [
          {
            required: true,
            message: "Coloca el valor de metamielocitos",
            trigger: "blur"
          }
        ],
        cumpleMetamielocitos2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de metamielocitos",
            trigger: "blur"
          }
        ],
        abastonados2: [
          {
            required: true,
            message: "Coloca el valor de abastonados",
            trigger: "blur"
          }
        ],
        cumpleAbastonados2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de abastonados",
            trigger: "blur"
          }
        ],
        segmentados2: [
          {
            required: true,
            message: "Coloca el valor de segmentados",
            trigger: "blur"
          }
        ],
        cumpleSegmentados2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de segmentados",
            trigger: "blur"
          }
        ],
        linfocitos2: [
          {
            required: true,
            message: "Coloca el valor de linfocitos",
            trigger: "blur"
          }
        ],
        cumpleLinfocitos2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de linfocitos",
            trigger: "blur"
          }
        ],
        monocitos2: [
          {
            required: true,
            message: "Coloca el valor de monocitos",
            trigger: "blur"
          }
        ],
        cumpleMonocitos2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de monocitos",
            trigger: "blur"
          }
        ],
        recuento: [
          {
            required: true,
            message: "Coloca el valor de recuento",
            trigger: "blur"
          }
        ],
        cumpleRecuento: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de recuento",
            trigger: "blur"
          }
        ],
        otros: [
          {
            required: true,
            message: "Coloca el valor de otros",
            trigger: "blur"
          }
        ],
        cumpleOtros: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de otros",
            trigger: "blur"
          }
        ],
        otros2: [
          {
            required: true,
            message: "Coloca el valor de otros",
            trigger: "blur"
          }
        ],
        cumpleOtros2: [
          {
            required: true,
            message: "Coloca si cumple con la cantidad de otros",
            trigger: "blur"
          }
        ],
      },
      formHemograma: {
          hematies:'',
          cumpleHematies:false,
          comentarioHematies:'',
          plaquetas:'',
          cumplePlaquetas:false,
          comentarioPlaquetas:'',
          hemoglobina:'',
          cumpleHemoglobina:false,
          comentarioHemoglobina:'',
          hematocrito:'',
          cumpleHematocrito:false,
          comentarioHematocrito:'',
          vcm:'',
          cumpleVcm:false,
          comentarioVcm:'',
          hcm:'',
          cumpleHcm:false,
          comentarioHcm:'',
          ccmh:'',
          cumpleCcmh:false,
          comentarioCcmh:'',
          eosinofilos:'',
          cumpleEosinofilos:false,
          comentarioEosinofilos:'',
          basofilos:'',
          cumpleBasofilos:false,
          comentarioBasofilos:'',
          mielocitos:'',
          cumpleMielocitos:false,
          comentarioMielocitos:'',
          metamielocitos:'',
          cumpleMetamielocitos:false,
          comentarioMetamielocitos:'',
          abastonados:'',
          cumpleAbastonados:false,
          comentarioAbastonados:'',
          segmentados:'',
          cumpleSegmentados:false,
          comentarioSegmentados:'',
          linfocitos:'',
          cumpleLinfocitos:false,
          comentarioLinfocitos:'',
          monocitos:'',
          cumpleMonocitos:false,
          comentarioMonocitos:'',
          eosinofilos2:'',
          cumpleEosinofilos2:false,
          comentarioEosinofilos2:'',
          basofilos2:'',
          cumpleBasofilos2:false,
          comentarioBasofilos2:'',
          mielocitos2:'',
          cumpleMielocitos2:false,
          comentarioMielocitos2:'',
          metamielocitos2:'',
          cumpleMetamielocitos2:false,
          comentarioMetamielocitos2:'',
          abastonados2:'',
          cumpleAbastonados2:false,
          comentarioAbastonados2:'',
          segmentados2:'',
          cumpleSegmentados2:false,
          comentarioSegmentados2:'',
          linfocitos2:'',
          cumpleLinfocitos2:false,
          comentarioLinfocitos2:'',
          monocitos2:'',
          cumpleMonocitos2:false,
          comentarioMonocitos2:'',
          recuento:'',
          cumpleRecuento:false,
          comentarioRecuento:'',
          otros:'',
          cumpleOtros:false,
          comentarioOtros:'',
          otros2:'',
          cumpleOtros2:false,
          comentarioOtros2:'',
      }
    };
  },

  computed: mapState({
    guardarGlobal: state => state.donacion.guardarFormularioHemograma
  }),

  watch: {
    guardarGlobal() {
      this.guardar("formHemograma");
    }
  },

  methods: {
    guardar: function(formulario) {
      this.$refs[formulario].validate(valid => {
        if (valid) {
          let me = this;
          const fd = new FormData();
          fd.append("peso", me.formHemograma.hematies);
          fd.append("peso", me.formHemograma.cumpleHematies);
          fd.append("peso", me.formHemograma.comentarioHematies);
          fd.append("peso", me.formHemograma.plaquetas);
          fd.append("peso", me.formHemograma.cumplePlaquetas);
          fd.append("peso", me.formHemograma.comentarioPlaquetas);
          fd.append("peso", me.formHemograma.hemoglobina);
          fd.append("peso", me.formHemograma.cumpleHemoglobina);
          fd.append("peso", me.formHemograma.comentarioHemoglobina);
          fd.append("peso", me.formHemograma.hematocrito);
          fd.append("peso", me.formHemograma.cumpleHematocrito);
          fd.append("peso", me.formHemograma.comentarioHematocrito);
          fd.append("peso", me.formHemograma.vcm);
          fd.append("peso", me.formHemograma.cumpleVcm);
          fd.append("peso", me.formHemograma.comentarioVcm);
          fd.append("peso", me.formHemograma.hcm);
          fd.append("peso", me.formHemograma.cumpleHcm);
          fd.append("peso", me.formHemograma.comentarioHcm);
          fd.append("peso", me.formHemograma.ccmh);
          fd.append("peso", me.formHemograma.cumpleCcmh);
          fd.append("peso", me.formHemograma.comentarioCcmh);
          fd.append("peso", me.formHemograma.eosinofilos);
          fd.append("peso", me.formHemograma.cumpleEosinofilos);
          fd.append("peso", me.formHemograma.comentarioEosinofilos);
          fd.append("peso", me.formHemograma.basofilos);
          fd.append("peso", me.formHemograma.cumpleBasofilos);
          fd.append("peso", me.formHemograma.comentarioBasofilos);
          fd.append("peso", me.formHemograma.mielocitos);
          fd.append("peso", me.formHemograma.cumpleMielocitos);
          fd.append("peso", me.formHemograma.comentarioMielocitos);
          fd.append("peso", me.formHemograma.metamielocitos);
          fd.append("peso", me.formHemograma.cumpleMetamielocitos);
          fd.append("peso", me.formHemograma.comentarioMetamielocitos);
          fd.append("peso", me.formHemograma.abastonados);
          fd.append("peso", me.formHemograma.cumpleAbastonados);
          fd.append("peso", me.formHemograma.comentarioAbastonados);
          fd.append("peso", me.formHemograma.segmentados);
          fd.append("peso", me.formHemograma.cumpleSegmentados);
          fd.append("peso", me.formHemograma.comentarioSegmentados);
          fd.append("peso", me.formHemograma.linfocitos);
          fd.append("peso", me.formHemograma.cumpleLinfocitos);
          fd.append("peso", me.formHemograma.comentarioLinfocitos);
          fd.append("peso", me.formHemograma.monocitos);
          fd.append("peso", me.formHemograma.cumpleMonocitos);
          fd.append("peso", me.formHemograma.comentarioMonocitos);
          fd.append("peso", me.formHemograma.eosinofilos2);
          fd.append("peso", me.formHemograma.cumpleEosinofilos2);
          fd.append("peso", me.formHemograma.comentarioEosinofilos2);
          fd.append("peso", me.formHemograma.basofilos2);
          fd.append("peso", me.formHemograma.cumpleBasofilos2);
          fd.append("peso", me.formHemograma.comentarioBasofilos2);
          fd.append("peso", me.formHemograma.mielocitos2);
          fd.append("peso", me.formHemograma.cumpleMielocitos2);
          fd.append("peso", me.formHemograma.comentarioMielocitos2);
          fd.append("peso", me.formHemograma.metamielocitos2);
          fd.append("peso", me.formHemograma.cumpleMetamielocitos2);
          fd.append("peso", me.formHemograma.comentarioMetamielocitos2);
          fd.append("peso", me.formHemograma.abastonados2);
          fd.append("peso", me.formHemograma.cumpleAbastonados2);
          fd.append("peso", me.formHemograma.comentarioAbastonados2);
          fd.append("peso", me.formHemograma.segmentados2);
          fd.append("peso", me.formHemograma.cumpleSegmentados2);
          fd.append("peso", me.formHemograma.comentarioSegmentados2);
          fd.append("peso", me.formHemograma.linfocitos2);
          fd.append("peso", me.formHemograma.cumpleLinfocitos2);
          fd.append("peso", me.formHemograma.comentarioLinfocitos2);
          fd.append("peso", me.formHemograma.monocitos2);
          fd.append("peso", me.formHemograma.cumpleMonocitos2);
          fd.append("peso", me.formHemograma.comentarioMonocitos2);
          fd.append("peso", me.formHemograma.recuento);
          fd.append("peso", me.formHemograma.cumpleRecuento);
          fd.append("peso", me.formHemograma.comentarioRecuento);
          fd.append("peso", me.formHemograma.otros);
          fd.append("peso", me.formHemograma.cumpleOtros);
          fd.append("peso", me.formHemograma.comentarioOtros);
          fd.append("peso", me.formHemograma.otros2);
          fd.append("peso", me.formHemograma.cumpleOtros2);
          fd.append("peso", me.formHemograma.comentarioOtros2);
          axios
            .post("/tarea/crear", fd)
            .then(function(response) {
              if (response.data == "Ok") {
                me.$notify({
                  title: "La cuarta fase del proceso fue guardada con éxito.",
                  type: "success"
                });
              } else {
                me.$notify.error({
                  title: "Error al guardar el formulario",
                  message: "Vuelve a intentarlo más tarde."
                });
              }
            })
            .catch(function(error) {
              console.log(error);
              me.$notify.error({
                title: "Error al guardar el formulario",
                message: "Contacta a nuestro equipo técnico."
              });
            });
        } else {
          return false;
        }
      });
    }
  }
};
</script>
