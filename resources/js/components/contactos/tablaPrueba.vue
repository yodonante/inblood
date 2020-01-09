<template>
  <v-app id="inspire">
    <v-data-table
      v-model="selected"
      :headers="headers"
      :items="filteredDesserts"
      :pagination.sync="pagination"
      select-all
      item-key="name"
      class="elevation-1"
    >
      <template slot="headers" slot-scope="props">
        <tr>
          <th>
            <v-checkbox
              :input-value="props.all"
              :indeterminate="props.indeterminate"
              primary
              hide-details
              @click.native="toggleAll"
            ></v-checkbox>
          </th>
          <th
            v-for="header in props.headers"
            :key="header.text"
            :class="['column sortable', pagination.descending ? 'desc' : 'asc', header.value === pagination.sortBy ? 'active' : '']"
            @click="changeSort(header.value)"
          >
            <v-icon small>arrow_upward</v-icon>
            {{ header.text }}
          </th>
        </tr>
        <tr class="grey lighten-3">
          <th>
            <v-icon>filter_list</v-icon>
          </th>
          <th v-for="header in props.headers" :key="header.text">
            <div v-if="filtros.hasOwnProperty(header.value)">
              <v-select
                flat
                hide-details
                small
                multiple
                clearable
                :items="columnValueList(header.value)"
                v-model="filtros[header.value]"
              ></v-select>
            </div>
          </th>
        </tr>
      </template>
      <template slot="items" slot-scope="props">
        <tr :active="props.selected" @click="props.selected = !props.selected">
          <td>
            <v-checkbox :input-value="props.selected" primary hide-details></v-checkbox>
          </td>
          <td>{{ props.item.name }}</td>
          <td class="text-xs-right">{{ props.item.calories }}</td>
          <td class="text-xs-right">{{ props.item.fat }}</td>
          <td class="text-xs-right">{{ props.item.carbs }}</td>
          <td class="text-xs-right">{{ props.item.protein }}</td>
          <td class="text-xs-right">{{ props.item.iron }}</td>
        </tr>
      </template>
    </v-data-table>
  </v-app>
</template>

<script>
export default {
  data: () => ({
    pagination: {
      sortBy: "name"
    },
    selected: [],
    headers: [
      {
        text: "Dessert (100g serving)",
        align: "left",
        value: "name"
      },
      { text: "Calories", value: "calories" },
      { text: "Fat (g)", value: "fat" },
      { text: "Carbs (g)", value: "carbs" },
      { text: "Protein (g)", value: "protein" },
      { text: "Iron (%)", value: "iron" }
    ],
    filtros: {
      fat: [],
      carbs: [],
      iron: []
    },
    desserts: [
      {
        value: false,
        name: "Frozen Yogurt",
        calories: 159,
        fat: 6.0,
        carbs: 24,
        protein: 4.0,
        iron: "1%"
      },
      {
        value: false,
        name: "Ice cream sandwich",
        calories: 237,
        fat: 'hola',
        carbs: 37,
        protein: 4.3,
        iron: "1%"
      },
      {
        value: false,
        name: "Eclair",
        calories: 262,
        fat: 'hola',
        carbs: 23,
        protein: 6.0,
        iron: "7%"
      },
      {
        value: false,
        name: "Cupcake",
        calories: 305,
        fat: 'hola',
        carbs: 67,
        protein: 4.3,
        iron: "8%"
      },
      {
        value: false,
        name: "Gingerbread",
        calories: 356,
        fat: 16.0,
        carbs: 49,
        protein: 3.9,
        iron: "16%"
      },
      {
        value: false,
        name: "Jelly bean",
        calories: 375,
        fat: 0.0,
        carbs: 94,
        protein: 0.0,
        iron: "0%"
      },
      {
        value: false,
        name: "Lollipop",
        calories: 392,
        fat: 0.2,
        carbs: 98,
        protein: 0,
        iron: "2%"
      },
      {
        value: false,
        name: "Honeycomb",
        calories: 408,
        fat: 3.2,
        carbs: 87,
        protein: 6.5,
        iron: "45%"
      },
      {
        value: false,
        name: "Donut",
        calories: 452,
        fat: 25.0,
        carbs: 51,
        protein: 4.9,
        iron: "22%"
      },
      {
        value: false,
        name: "KitKat",
        calories: 518,
        fat: 26.0,
        carbs: 65,
        protein: 7,
        iron: "6%"
      }
    ]
  }),
  computed: {
    filteredDesserts() {
      return this.desserts.filter(d => {
        return Object.keys(this.filtros).every(f => {
          return this.filtros[f].length < 1 || this.filtros[f].includes(d[f]);
        });
      });
    }
  },

  methods: {
    toggleAll() {
      if (this.selected.length) this.selected = [];
      else this.selected = this.desserts.slice();
    },
    changeSort(column) {
      if (this.pagination.sortBy === column) {
        this.pagination.descending = !this.pagination.descending;
      } else {
        this.pagination.sortBy = column;
        this.pagination.descending = false;
      }
    },
    columnValueList(val) {
      return this.desserts.map(d => d[val]);
    }
  }
};
</script>
