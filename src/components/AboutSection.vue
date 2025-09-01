<template>
  <section class="about-section">
    <div class="about-img">
      <video autoplay muted loop playsinline class="about-video">
        <source src="/aboutme.mp4" type="video/mp4" />
        Tu navegador no soporta video.
      </video>
    </div>
    <div class="about-content">
      <h2>Sobre mí</h2>
      <p>
        Soy Sara, tatuadora profesional. Mi pasión es crear arte único y personalizado para cada cliente.
      </p>
    </div>
  </section>
</template>

<style scoped>
.about-section {
  display: flex;
  gap: 2rem;
  align-items: center;
  padding: 3rem 1rem;
  background: transparent; /* <- transparente para ver el fondo global */
  flex-wrap: wrap;
  position: relative;
  z-index: 2; /* encima del fondo global */
}

.about-img {
  width: 180px;
  height: 180px;
  border-radius: 8px;
  flex-shrink: 0;
  overflow: hidden;
  position: relative; /* mantiene el video dentro del contenedor */
  z-index: 1; /* video encima del fondo, pero detrás del texto si lo hubiera */
}

.about-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
}

.about-content {
  flex: 1;
  color: #F5F5F5; /* texto sobre fondo global */
  z-index: 3;
}

.about-link {
  display: inline-block;
  margin-top: 1rem;
  color: #B3B3B3; /* color secundario */
  font-weight: 600;
  text-decoration: underline;
}
</style>
