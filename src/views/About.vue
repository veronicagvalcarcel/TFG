<template>
  <section class="about-section-page">
    <video autoplay muted loop playsinline class="background-video">
      <source src="/aboutme.mp4" type="video/mp4" />
      Tu navegador no soporta videos HTML5.
    </video>
    <div class="about-overlay">
      <AboutSection />
    </div>
  </section>
</template>

<script setup>
import AboutSection from '../components/AboutSection.vue'
</script>

<style scoped>
.about-section-page {
   display: flex;
  gap: 2rem;
  align-items: center;
  padding: 3rem 1rem;
  background: transparent; /* transparente para ver el fondo global */
  flex-wrap: wrap;
  position: relative; /* necesario para que z-index funcione */
  z-index: 2; /* encima del humo */
}

.background-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 1;
}

.about-overlay {
  position: relative;
  z-index: 2;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 3rem 1rem;
  background: rgba(0, 0, 0, 0.3);
}
</style>
