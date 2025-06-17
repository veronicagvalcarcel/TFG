<template>
  <header>
    <div class="header-container">
      <h1>Witch Tattoo</h1>
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
</style>