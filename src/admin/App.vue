<template>
  <div class="pr-8 ">
    <HeaderNav />
    <Nav />
    <transition name="fade">
      <router-view></router-view>
    </transition>
  </div>
</template>

<script>
import Nav from "./components/layout/Nav.vue";
import HeaderNav from "./components/layout/HeaderNav.vue";
export default {
  name: "App",
  components: {
    Nav,
    HeaderNav,
  },
};
</script>

<style scoped>
.fade-enter,
.fade-leave-to {
  transform: translateX(-80px);
  opacity: 0;
}
.fadee-enter-active {
  transition: all 0.5s ease;
}
.fade-leave-active {
  transition: all 0.5s ease;
}
</style>
