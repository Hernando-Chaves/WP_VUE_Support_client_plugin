<template>
  <div>
    <div class="mt-8">
      <div class="">
        <ul>
          <li class="flex  gap-1  text-sm text-primary-500 uppercase">
            <router-link class="link-bwc" :to="{ name: 'inicio' }"
              >Inicio</router-link
            >
            <router-link class="link-bwc" :to="{ name: 'video-tutoriales' }"
              >Video tutoriales</router-link
            >
            <router-link class="link-bwc" :to="{ name: 'conocimiento' }"
              >Preguntas frecuentes</router-link
            >
            <router-link class="link-bwc" :to="{ name: 'tickets' }"
              >Tickets</router-link
            >
            <router-link class="link-bwc" :to="{ name: 'mensaje-correo' }"
              >Correo</router-link
            >
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Nav",
};
</script>

<style lang="scss" scoped></style>
