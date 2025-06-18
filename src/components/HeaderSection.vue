<template>
  <header>
    <div class="header-container">
      <h1>Bienvenid@ a Witch Tattoo</h1>
      <p>Explora nuestros diseños, inspírate, conecta con tu estilo y agenda fácilmente tu próxima cita.</p>
    </div>
  </header>
</template>

<script>
export default {}
</script>

<style scoped>
.header-container {
  position: relative;
  width: 100%;
  height: 100vh;
  background-color: transparent;
}
h1 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 48px;
  color: #fff;
  text-align: center;
  z-index: 2;
}
p {
  position: absolute;
  top: calc(50% + 60px);
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 24px;
  color: #fff;
  text-align: center;
  z-index: 2;
}
</style>