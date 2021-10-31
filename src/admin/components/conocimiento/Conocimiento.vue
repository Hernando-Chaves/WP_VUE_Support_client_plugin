<template>
  <div>
    <div class="bg-white h-80  rounded-xl"></div>
    <div class="grid grid-cols-3  h-12 my-5">
      <div></div>
      <div class="">
        <h2 class="text-xl text-center font-semibold">
          ¿Como podemos ayudarte?
        </h2>
        <div class="">
          <input
            class="w-9/12 rounded-2xl h-12 border border-gray-200 focus:outline-none   focus:ring-0 "
            type="text"
            placeholder="Escribe aquí tu consulta"
          />
          <button
            class="bg-green-500 px-6 py-4 text-white rounded-tl-0 rounded-bl-0 rounded-tr-2xl rounded-br-2xl"
          >
            Buscar
          </button>
        </div>
      </div>
      <div></div>
    </div>
    <div class="grid grid-cols-8 gap-5 h-52 my-14">
      <div></div>
      <div
        class="relative bg-white rounded-md p-2 hover:shadow-xl cursor-pointer transition duration-500 ease-in-out col-span-2"
      ></div>
      <div
        class="relative bg-white rounded-md p-2 hover:shadow-xl cursor-pointer transition duration-500 ease-in-out col-span-2"
      ></div>
      <div
        class="relative bg-white rounded-md p-2 hover:shadow-xl cursor-pointer transition duration-500 ease-in-out col-span-2"
      ></div>
      <div></div>
    </div>
  </div>
</template>

<script>
export default {};
</script>

<style scoped>
input {
  border-radius: 30px 0 0 30px;
  padding: 1rem 3rem;
}

input:focus {
  border-color: lightgray;
  box-shadow: 0 0 0 1px #f2f2f2;
}
</style>
