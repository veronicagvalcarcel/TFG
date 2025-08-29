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
  background: #f9f6f3;
  flex-wrap: wrap;
}

.about-img {
  width: 180px;
  height: 180px;
  border-radius: 8px;
  flex-shrink: 0;
  overflow: hidden;
  position: relative;
}

.about-video {
  width: 100%;
  height: 100%;
  object-fit: cover; /* asegura que el video cubra todo el contenedor */
  position: absolute;
  top: 0;
  left: 0;
}

.about-content {
  flex: 1;
}

.about-link {
  display: inline-block;
  margin-top: 1rem;
  color: #b48a78;
  font-weight: 600;
  text-decoration: underline;
}
</style>
