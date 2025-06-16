<template>
  <section class="AboutSection">
    <video autoplay muted loop playsinline class="background-video">
      <source src="/aboutme.mp4" type="video/mp4" />
      Tu navegador no soporta videos HTML5.
    </video>

    <div class="about-overlay">
      <div class="about-img"></div>
      <div class="about-content">
        <h2>Sobre mí</h2>
        <p>
          Soy Sara, tatuadora profesional. Mi pasión es crear arte único y personalizado para cada cliente. Descubre más sobre mi trayectoria y filosofía.
        </p>
        <router-link to="/faq" class="about-link">Conoce más</router-link>
      </div>
    </div>
  </section>
</template>

<style scoped>
.about-section {
  position: relative;
  overflow: hidden;
  padding: 3rem 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 300px;
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
  display: flex;
  gap: 2rem;
  flex-wrap: wrap;
  align-items: center;
  width: 100%;
}

.about-img {
  width: 180px;
  height: 180px;
  background: #e0d6ce url('/about-placeholder.jpg') center/cover no-repeat;
  border-radius: 8px;
  flex-shrink: 0;
}

.about-content {
  flex: 1;
  color: white; /* Asegura buena visibilidad del texto */
  text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7); /* Mejora legibilidad sobre el video */
}

.about-link {
  display: inline-block;
  margin-top: 1rem;
  color: #ffdecf;
  font-weight: 600;
  text-decoration: underline;
}
</style>
