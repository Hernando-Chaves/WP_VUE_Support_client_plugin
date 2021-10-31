<template>
  <div
    class="relative bg-white rounded-md p-2 hover:shadow-xl cursor-pointer transition duration-500 ease-in-out"
  >
    <div class="bg-gray-100 h-28 rounded-md">
      <iframe
        class="w-full"
        height="113"
        :src="`https://www.youtube.com/embed/${idYoutube}`"
        :title="title"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen
      ></iframe>
    </div>
    <div class="text-secondary-500 w-full text-sm mt-2 capitalize">
      {{ searchWord(title) }}
    </div>
    <div class="svg-play absolute bottom-3 right-3">
      <svg
        class="fill-current text-primary-500"
        height="18px"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 512 512"
      >
        <path
          d="M371.7 238l-176-107c-15.8-8.8-35.7 2.5-35.7 21v208c0 18.4 19.8 29.8 35.7 21l176-101c16.4-9.1 16.4-32.8 0-42zM504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256z"
        />
      </svg>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    idYoutube: {
      type: String,
      required: true,
    },
    title: {
      type: String,
      required: true,
    },
  },
  methods: {
    searchWord(string) {
      return string.toLowerCase().replace("uniandes", " ");
    },
  },
};
</script>

<style lang="scss" scoped></style>
