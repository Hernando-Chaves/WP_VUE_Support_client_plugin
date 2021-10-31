<template>
  <div>
    <div class="flex space-x-2 h-48 mt-4  rounded-md justify-center">
      <router-link
        :to="{ name: 'video-tutoriales' }"
        class="hover:bg-purple-500 group bg-white w-1/4 h-48 hover:shadow-xl transition duration-500 cursor-pointer ease-in-out rounded-xl relative pr-6"
      >
        <svg
          class="fill-current text-purple-100 group-hover:text-white absolute top-5 left-5"
          height="76px"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 576 512"
        >
          <path
            d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"
          />
        </svg>
        <div class=" bottom-6 right-5 absolute">
          <h2
            class="text-xl text-right text-purple-500 group-hover:text-white font-semibold"
          >
            Video tutoriales
          </h2>
          <h3 class="text-gray-600 text-right text-md group-hover:text-white">
            Tutoriales en vídeo, sobre la administración<br />
            de tu página web
          </h3>
        </div>
      </router-link>

      <router-link
        :to="{ name: 'conocimiento' }"
        class="group bg-white hover:bg-primary-500 w-1/4 h-48 bg-white hover:shadow-xl transition duration-500 cursor-pointer ease-in-out rounded-xl relative pr-6"
      >
        <svg
          class="fill-current text-primary-100 group-hover:text-white absolute top-5 left-5"
          height="76px"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 576 512"
        >
          <path
            d="M622.34 153.2L343.4 67.5c-15.2-4.67-31.6-4.67-46.79 0L17.66 153.2c-23.54 7.23-23.54 38.36 0 45.59l48.63 14.94c-10.67 13.19-17.23 29.28-17.88 46.9C38.78 266.15 32 276.11 32 288c0 10.78 5.68 19.85 13.86 25.65L20.33 428.53C18.11 438.52 25.71 448 35.94 448h56.11c10.24 0 17.84-9.48 15.62-19.47L82.14 313.65C90.32 307.85 96 298.78 96 288c0-11.57-6.47-21.25-15.66-26.87.76-15.02 8.44-28.3 20.69-36.72L296.6 284.5c9.06 2.78 26.44 6.25 46.79 0l278.95-85.7c23.55-7.24 23.55-38.36 0-45.6zM352.79 315.09c-28.53 8.76-52.84 3.92-65.59 0l-145.02-44.55L128 384c0 35.35 85.96 64 192 64s192-28.65 192-64l-14.18-113.47-145.03 44.56z"
          />
        </svg>
        <div class=" bottom-6 right-5 absolute">
          <h2
            class="text-xl text-right text-primary-500 group-hover:text-white font-semibold"
          >
            Base de conocimiento
          </h2>
          <h3 class="text-gray-600 text-right text-md group-hover:text-white">
            Encuentra las respuestas a las preguntas<br />
            mas comunes.
          </h3>
        </div>
      </router-link>

      <router-link
        :to="{ name: 'tickets' }"
        class="group bg-white hover:bg-green-500 w-1/4 h-48 bg-white hover:shadow-xl transition duration-500 cursor-pointer ease-in-out rounded-xl relative px-6"
      >
        <svg
          class="fill-current text-green-100 group-hover:text-white absolute top-5 left-5"
          height="76px"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 576 512"
        >
          <path
            d="M128 160h320v192H128V160zm400 96c0 26.51 21.49 48 48 48v96c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48v-96c26.51 0 48-21.49 48-48s-21.49-48-48-48v-96c0-26.51 21.49-48 48-48h480c26.51 0 48 21.49 48 48v96c-26.51 0-48 21.49-48 48zm-48-104c0-13.255-10.745-24-24-24H120c-13.255 0-24 10.745-24 24v208c0 13.255 10.745 24 24 24h336c13.255 0 24-10.745 24-24V152z"
          />
        </svg>
        <div class=" bottom-6 right-5 absolute">
          <h2
            class="text-xl text-right text-green-500 group-hover:text-white font-semibold"
          >
            Tickets
          </h2>
          <h3 class="text-gray-600 text-right text-md group-hover:text-white">
            ¿No encontraste respuesta a tu pregunta?<br />Envíanos un ticket.
          </h3>
        </div>
      </router-link>

      <router-link
        :to="{ name: 'mensaje-correo' }"
        class="group bg-white hover:bg-blue-500 w-1/4 h-48 bg-white hover:shadow-xl transition duration-500 cursor-pointer ease-in-out rounded-xl relative pr-6"
      >
        <svg
          class="fill-current text-blue-100 group-hover:text-white absolute top-5 left-5"
          height="76px"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 576 512"
        >
          <path
            d="M176 216h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16c0 8.84 7.16 16 16 16zm-16 80c0 8.84 7.16 16 16 16h160c8.84 0 16-7.16 16-16v-16c0-8.84-7.16-16-16-16H176c-8.84 0-16 7.16-16 16v16zm96 121.13c-16.42 0-32.84-5.06-46.86-15.19L0 250.86V464c0 26.51 21.49 48 48 48h416c26.51 0 48-21.49 48-48V250.86L302.86 401.94c-14.02 10.12-30.44 15.19-46.86 15.19zm237.61-254.18c-8.85-6.94-17.24-13.47-29.61-22.81V96c0-26.51-21.49-48-48-48h-77.55c-3.04-2.2-5.87-4.26-9.04-6.56C312.6 29.17 279.2-.35 256 0c-23.2-.35-56.59 29.17-73.41 41.44-3.17 2.3-6 4.36-9.04 6.56H96c-26.51 0-48 21.49-48 48v44.14c-12.37 9.33-20.76 15.87-29.61 22.81A47.995 47.995 0 0 0 0 200.72v10.65l96 69.35V96h320v184.72l96-69.35v-10.65c0-14.74-6.78-28.67-18.39-37.77z"
          />
        </svg>
        <div class=" bottom-6 right-5 absolute">
          <h2
            class="text-xl text-right text-blue-500 group-hover:text-white font-semibold"
          >
            Envianos un mensaje
          </h2>
          <h3 class="text-gray-600 text-right text-md group-hover:text-white">
            Si es un asunto de URGENCIA,<br />
            envianos un mensaje por correo.
          </h3>
        </div>
      </router-link>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped></style>
