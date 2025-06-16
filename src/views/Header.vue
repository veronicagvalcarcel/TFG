<template>
  <header>
    <div class="header-container">
      <h1>{{ title }}</h1>
      <video :src="videoUrl" autoplay loop muted class="header-video">
        <source :src="videoUrl" type="video/mp4">
      </video>
    </div>
  </header>
</template>

<script>
export default {

  data() {
    return {
      title: 'Witch Tattoo',
      videoUrl: '/public/1.mp4'
    }
  }
}
</script>

<style scoped>
.header-container {
  position: relative;
  width: 100%;
  height: 100vh;
  background-color: #fff;
}

.header-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1; /* Cambiado a 1 para que el video esté encima de otros elementos */
  visibility: visible; /* Agregado para asegurarse de que el video esté visible */
}

h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 48px;
  color: #fff;
  text-align: center;
  z-index: 2; /* Agregado para asegurarse de que el título esté encima del video */
}
</style>