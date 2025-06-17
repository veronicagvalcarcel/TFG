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
  position: relative;
  overflow: hidden;
  min-height: 400px;
}

.background-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  z-index: 0;
}

.about-overlay {
  position: relative;
  z-index: 1;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 3rem 1rem;
  background: rgba(0, 0, 0, 0.3);
}
</style>
