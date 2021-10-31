<template>
  <div class="">
    <div v-if="loading">
      <h3>Cargando...</h3>
    </div>
    <div v-else>
      <div class="gral flex justify-center gap-2  h-80">
        <div class="bg-white rounded-xl w-1/2"></div>
        <div class="bg-white rounded-xl w-1/2 overflow-hidden">
          <img
            src="https://previews.123rf.com/images/vectorleb/vectorleb2007/vectorleb200700010/151014845-customer-support-and-advising-clients-vector-illustration-concept-suitable-for-web-landing-page-ui-m.jpg"
            alt=""
            height="320px"
          />
        </div>
      </div>

      <MenuIcons />
    </div>
  </div>
</template>

<script>
import { CURSOS_ATC } from "../queries/cursos";
import MenuIcons from "./MenuIcons.vue";
export default {
  data() {
    return {
      loading: false,
      cursos: [],
    };
  },
  components: {
    MenuIcons,
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

<style scoped>
.soporte {
  background-size: "contain";
  background-repeat: no-repeat;
  background-position: center center;
  background-image: url("https://previews.123rf.com/images/vectorleb/vectorleb2007/vectorleb200700010/151014845-customer-support-and-advising-clients-vector-illustration-concept-suitable-for-web-landing-page-ui-m.jpg");
}
</style>
