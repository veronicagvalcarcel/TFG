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
        Soy Sara, tatuadora profesional. Mi pasión es crear arte único y personalizado.
      </p>

      <p class="about-locations-intro">
        Nos vemos en:
      </p>
      <div class="about-locations">
    
        <span class="location-btn no-link">Sa Coma</span>
      </div>
    </div>
  </section>
</template>

<style scoped>
@font-face {
  font-family: 'Pirata';
  src: url('/Fonts/Pirata/Pirata.woff2') format('woff2'),
       url('/Fonts/Pirata/Pirata.woff') format('woff');
  font-weight: normal;
  font-style: normal;
}

.about-section {
  display: flex;
  gap: 2rem;
  align-items: center;
  padding: 3rem 5rem; /* margen aumentado a los lados */
  background: transparent;
  flex-wrap: wrap;
  position: relative;
}

.about-img {
  width: 220px;  /* un poco más grande */
  height: 220px;
  border-radius: 8px;
  flex-shrink: 0;
  overflow: hidden;
  position: relative;
  z-index: 1;
}

.about-video {
  width: 100%;
  height: 100%;
  object-fit: cover;
  position: absolute;
  top: 0;
  left: 0;
  transform: scale(1.15); /* zoom para eliminar márgenes negros */
  z-index: 0;
}

.about-content {
  flex: 1;
  color: #F5F5F5;
  z-index: 3;
}


/* Botones de ubicación */
.location-btn {
  display: inline-block;
  padding: 0.5rem 1rem;
  border-radius: 4px;
  background-color: #FF2E2E;
  color: #fff;
  font-weight: 600;
  font-family: 'Pirata', cursive;
  font-size: clamp(1.5rem, 2vw, 2rem);
  cursor: pointer;
  text-decoration: none;
  margin-right: 1rem;
  margin-top: 1rem;
  transition: all 0.2s ease;
}

.location-btn:hover {
  background-color: #e01f1f;
  transform: scale(1.05);
}

.location-btn.no-link {
  background-color: #555;
  cursor: default;
}

</style>
