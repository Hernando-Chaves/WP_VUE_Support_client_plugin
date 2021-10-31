<template>
  <div>
    <Header />
    <div class="inline-grid grid-cols-5 gap-x-2 h-44 my-5">
      <div class="" v-if="loading">
        <h2 class="text-xl text-center">Cargando videos...</h2>
      </div>
      <Video
        :idYoutube="idDelVideo"
        :title="title"
        v-for="({ title, videosCMB: { idDelVideo } }, i) in videoTutoriales"
        :key="i"
      />
    </div>
  </div>
</template>

<script>
import Header from "./Header.vue";
import Video from "./Video.vue";
import { VIDEOS } from "../../queries/Videos.js";

export default {
  async mounted() {
    this.loading = true;
    await this.cargaVideos();
    this.loading = false;
  },
  data() {
    return {
      loading: false,
      videoTutoriales: [],
    };
  },
  components: {
    Header,
    Video,
  },
  methods: {
    async cargaVideos() {
      const {
        data: {
          videosBWC: { nodes },
        },
      } = await this.$apollo.query({
        query: VIDEOS,
      });
      this.videoTutoriales = nodes;
    },
  },
};
</script>
