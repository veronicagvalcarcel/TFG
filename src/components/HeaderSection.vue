<template>
  <header>
    <div class="header-container">
      <h1 class="header-title">Witch Tattoo Studio</h1>
      <p class="header-slash"></p>
      <p class="header-text">
        Explora todos los diseños, inspírate, conecta con tu estilo y agenda tu próxima cita.
      </p>
    </div>
  </header>
</template>

<script>
export default {}
</script>

<style scoped>
@font-face {
  font-family: 'Fleur De Leah';
  src: url('/Fonts/Fleur de Leah/hinted-subset-FleurDeLeah-Regular.woff2') format('woff2'),
       url('/Fonts/Fleur de Leah/hinted-subset-FleurDeLeah-Regular.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-35px); }
}

@keyframes sparkle {
  0%, 100% { opacity: 0; transform: scale(0.5) translate(0, 0); }
  50% { opacity: 1; transform: scale(1) translate(5px, -5px); }
}

@keyframes fadeSlideIn {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}

/* Sparkles */
.header-title::before,
.header-title::after {
  content: '';
  position: absolute;
  width: 8px;
  height: 8px;
  background: radial-gradient(circle, #fff 0%, transparent 70%);
  border-radius: 50%;
  opacity: 0;
  pointer-events: none;
  animation: sparkle 3s infinite ease-in-out;
  z-index: 2;
}

.header-title::before { top: 10%; left: 20%; animation-delay: 0s; }
.header-title::after { top: 30%; right: 15%; animation-delay: 1.5s; }

/* Contenedor */
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

/* Título */
.header-title {
  font-family: 'Fleur De Leah', cursive;
  font-size: 150px;
  letter-spacing: 5px;
  color: #fff;
  margin-bottom: 1rem;
  animation: fadeSlideIn 8s ease forwards, float 3s ease-in-out infinite;
  text-shadow: 0 0 4px #ff0000, 0 0 8px #ff0000, 0 0 12px #ff0000;
  position: relative;
  z-index: 1;
}

/* Hover mágico */
.header-title:hover {
  transform: scale(1.1) rotate(-2deg);
  text-shadow:
    0 0 8px #ff0000,
    0 0 16px #ff0000,
    0 0 24px #ff4d4d;
  transition: transform 0.3s ease, text-shadow 0.3s ease;
}

.header-slash {
  font-size: 32px;
  color: #fff;
  margin-bottom: 0.5rem;
  opacity: 0.8;
  animation: shimmer 2.5s ease-in-out infinite alternate;
}

.header-text {
  font-size: 24px;
  color: #fff;
  margin: 0;
  max-width: 800px;
}
</style>
