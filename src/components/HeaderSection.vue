<template>
  <header>
    <div class="header-container">
      <h1 class="header-title">Witch Tattoo</h1>
      <p class="header-slash"></p>
      <p class="header-text">
        Explora nuestros diseños, inspírate, conecta con tu estilo y agenda fácilmente tu próxima cita.
      </p>
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
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 2rem;
  box-sizing: border-box;
  text-align: center;
  z-index: 1;
}

.header-title {
  font-size: 48px;
  color: #fff;
  margin-bottom: 1rem;
}

.header-slash {
  font-size: 32px;
  color: #fff;
  margin-bottom: 0.5rem;
}

.header-text {
  font-size: 24px;
  color: #fff;
  margin: 0;
}
</style>
