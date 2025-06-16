<template>
  <section class="about-section">
    <div class="about-img"></div>
    <div class="about-content">
      <h2>Sobre mí</h2>
      <p>
        Soy Sara, tatuadora profesional. Mi pasión es crear arte único y personalizado para cada cliente. Descubre más sobre mi trayectoria y filosofía.
      </p>
      <router-link to="/faq" class="about-link">Conoce más</router-link>
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
  background: #e0d6ce url('/about-placeholder.jpg') center/cover no-repeat;
  border-radius: 8px;
  flex-shrink: 0;
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