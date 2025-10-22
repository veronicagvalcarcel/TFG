<template>
  <header class="header-wrapper">
    <!-- Video de fondo -->
    <video class="header-video" autoplay muted loop playsinline>
      <source src="/calavera.webm" type="video/webm" />
      Tu navegador no soporta el video.
    </video>

    <!-- Contenedor principal -->
    <div class="header-container">
      <!-- Título principal -->
      <h1 class="header-title">Witch Tattoo Studio</h1>

      <!-- Texto hero en dos frases -->
      <p class="header-text first-line">Explora todos los diseños, inspírate,</p>
      <p class="header-text second-line">conecta con tu estilo y agenda tu próxima cita.</p>
    </div>
  </header>
</template>

<script>
export default {}
</script>

<style scoped>
/* Fuentes */
@font-face {
  font-family: 'Pirata';
  src: url('/Fonts/Pirata/Pirata-Regular.woff2') format('woff2'),
       url('/Fonts/Pirata/Pirata-Regular.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

/* Wrapper del header */
.header-wrapper {
  position: relative;
  width: 100%;
  height: 100vh; /* ocupar todo el viewport */
}


/* Video de fondo */
.header-video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  transform: translate(-50%, -50%);
  object-fit: cover;
  z-index: 0;
  display: block;
}

/* Contenedor principal */
.header-container {
  position: relative;
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  padding: 2rem;
  box-sizing: border-box;
  z-index: 1;
}

/* Título principal */
.header-title {
  font-family: 'Fleur De Leah', cursive;
  font-size: clamp(6rem, 15vw, 14rem);
  color: #fff;
  margin-bottom: 1rem;
  animation: fadeSlideIn 2s ease forwards, float 3s ease-in-out infinite;
  text-shadow: 0 0 8px #ff0000, 0 0 16px #ff0000, 0 0 24px #ff4d4d;
  position: relative;
}

/* Sparkles sobre título */
.header-title::before,
.header-title::after {
  content: '';
  position: absolute;
  width: 12px;
  height: 12px;
  background: radial-gradient(circle, #fff 0%, transparent 70%);
  border-radius: 50%;
  opacity: 0;
  pointer-events: none;
  animation: sparkle 3s infinite ease-in-out;
  z-index: 2;
}
.header-title::before { top: 10%; left: 20%; animation-delay: 0s; }
.header-title::after { top: 30%; right: 15%; animation-delay: 1.5s; }

/* Texto hero */
.header-text {
  font-family: 'Pirata', cursive;
  font-size: clamp(2rem, 4vw, 4rem);
  color: #fff;
  margin: 0.5rem 0;
  text-shadow: 
    -3px -3px 0 #000, 3px -3px 0 #000,
    -3px 3px 0 #000, 3px 3px 0 #000;
  opacity: 0;
  position: relative;
  animation-fill-mode: forwards;
  animation-name: fadeSlideIn, floatText;
  animation-duration: 2s, 3s;
  animation-timing-function: ease, ease-in-out;
  animation-iteration-count: 1, infinite;
}

/* Sparkles para texto hero */
.header-text::before,
.header-text::after {
  content: '';
  position: absolute;
  width: 8px;
  height: 8px;
  background: radial-gradient(circle, #fff 0%, transparent 70%);
  border-radius: 50%;
  opacity: 0;
  pointer-events: none;
  animation: sparkle 2.5s infinite ease-in-out;
  z-index: 2;
}
.first-line::before { top: 20%; left: 15%; animation-delay: 0s; }
.first-line::after  { bottom: 15%; right: 10%; animation-delay: 1s; }
.second-line::before { top: 25%; left: 10%; animation-delay: 2s; }
.second-line::after  { bottom: 10%; right: 20%; animation-delay: 3s; }

/* Animación por línea */
.first-line { animation-delay: 0s, 0s; }
.second-line { animation-delay: 2s, 0s; }

/* Animaciones */
@keyframes float {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-20px); }
}
@keyframes floatText {
  0%, 100% { transform: translateY(0px); }
  50% { transform: translateY(-10px); }
}
@keyframes fadeSlideIn {
  0% { opacity: 0; transform: translateY(20px); }
  100% { opacity: 1; transform: translateY(0); }
}
@keyframes sparkle {
  0%, 100% { opacity: 0; transform: scale(0.5); }
  50% { opacity: 1; transform: scale(1); }
}

/* Responsividad para móviles */
@media (max-width: 500px) {
  .header-title { font-size: clamp(4rem, 18vw, 10rem); }
  .header-text { font-size: clamp(1.5rem, 5vw, 2.5rem); }
  
  .hero-section {
    position: relative;
    width: 100%;
    height: 100vh; /* ocupa toda la pantalla */
    overflow: hidden;
  }
}

</style>
