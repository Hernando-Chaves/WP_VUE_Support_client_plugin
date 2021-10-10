<template>
  <div>
    <h1>Inicio</h1>
    <div v-if="loading">
      <h3>Cargando...</h3>
    </div>
    <div v-else>
      {{ cursos }}
    </div>
  </div>
</template>

<script>
import { CURSOS_ATC } from "../queries/cursos";
export default {
  data() {
    return {
      loading: false,
      cursos: [],
    };
  },
  async mounted() {
    this.loading = true;
    this.cursos = await this.$apollo.query({
      query: CURSOS_ATC,
    });
    this.loading = false;
  },
};
</script>

<style lang="scss" scoped></style>
