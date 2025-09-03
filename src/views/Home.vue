<script setup>
import Header from '../components/HeaderSection.vue'
import AboutSection from '../components/AboutSection.vue'
import ServicesSection from '../components/ServicesSection.vue'
import ReservasForm from '../components/ReservasSection.vue'
import Carrusel from '../components/CarruselSection.vue'
import FooterSection from '../components/FooterSection.vue'
import FAQSection from '../components/FAQSection.vue' 
</script>

<template>
  <div class="bg-container">
    <!-- Capas de humo (decorativa) -->
    <div class="smoke smoke3" aria-hidden="true"></div>

    <!-- Menú fijo -->
    <nav class="main-nav" role="navigation" aria-label="Menú principal">
      <div class="nav-container">
        <!-- Logo -->
        <router-link :to="{ path: '/', hash: '#Home' }" class="logo-link">
          Witch Tattoo Studio
        </router-link>

        <!-- Enlaces con scroll hash -->
        <div class="nav-links">
          <router-link :to="{ path: '/', hash: '#Carrusel' }">Galería</router-link>
          <router-link :to="{ path: '/', hash: '#ServicesSection' }">Servicios</router-link>
          <router-link :to="{ path: '/', hash: '#FAQ' }">FAQ</router-link>
        </div>

        <router-link to="/reservas" class="reserva-btn-menu" role="button">¡Quiero tatuarme!</router-link>
      </div>
    </nav>

    <!-- Hero con video -->
    <header id="Home" class="hero-container" role="banner">
      <video autoplay muted loop class="hero-video" aria-label="Una explosión de tinta lila y purpurina sobre el título del estudio de tatuajes llamado Witch Tattoo Studio">
        <source src="/1.mp4" type="video/mp4" />
      </video>

      <div class="overlay">
        <Header />
      </div>
    </header>

    <!-- Secciones principales -->
    <main role="main">
      <section id="AboutSection" class="section-bg">
        <AboutSection />
      </section>

      <section id="Carrusel" class="section-bg">
        <Carrusel />
      </section>

      <section id="ServicesSection" class="section-bg">
        <ServicesSection />
      </section>

      <section id="ReservasForm" class="section-bg">
        <ReservasForm />
      </section>

      <section id="FAQ" class="section-bg">
        <FAQSection />
      </section>

    </main>

    <!-- Footer -->
    <FooterSection role="contentinfo" />
  </div>
</template>

<style>
html {
  scroll-behavior: smooth;
}

/* =======================
   Menú principal
======================= */
.main-nav {
  position: fixed;
  top: 0;
  width: 100%;
  background: #2E1A47;
  z-index: 200;
  box-shadow: 0 2px 8px rgba(0,0,0,0.4);
}

.nav-container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 2rem;
}

.logo-link {
  font-weight: bold;
  color: #FF2E2E; /* texto logo más visible */
  text-decoration: none;
  font-size: 1.2rem;
  text-shadow: 1px 1px 0 #000000;
}

.logo-link:hover {
  color: #FF2E2E; /* hover rojo */
}

.nav-links { display: flex; gap: 2rem; }

.nav-links a {
  color: #F5F5F5; /* texto legible sobre fondo oscuro */
  text-decoration: none;
  font-weight: 600;
  transition: color 0.2s, text-shadow 0.2s;
}

.nav-links a:hover {
  color: #FF2E2E; /* hover rojo */
  text-shadow: 1px 1px 0 #000;
}

.reserva-btn-menu {
  padding: 0.6rem 1.8rem;
  background: linear-gradient(45deg, #490368, #dac0f5);
  color: #F5F5F5; /* texto visible */
  font-weight: bold;
  border-radius: 12px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 0 10px rgba(255, 255, 255, 0.6);
  transition: transform 0.3s ease, box-shadow 0.3s ease, color 0.3s;
}

.reserva-btn-menu:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(218, 192, 245, 0.8);
  color: #FF2E2E; /* hover rojo */
}

/* =======================
   Hero video
======================= */
.hero-container {
  position: relative;
  width: 100%;
  height: 100vh;
  overflow: hidden;
}

.hero-video {
  position: absolute;
  top: 50%;
  left: 50%;
  width: auto;
  height: 100%;
  min-width: 100%;
  transform: translate(-50%, -50%);
  object-fit: cover;
  z-index: 0;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.footer-section {
  position: relative;
  z-index: 3;
}

.bg-container {
  position: relative;
  min-height: 100vh;
  background: #2E1A47; /* fondo original */
  overflow-x: hidden;
}

.section-bg {
  position: relative;
  z-index: 2;
}

.smoke3 {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url("/Texturas/fondo.webp");
  background-repeat: repeat;
  opacity: 0.1;
  filter: blur(4px);
  animation: moveSmoke 220s linear infinite;
  z-index: 1;
}

@keyframes moveSmoke {
  from { background-position: 0 0; }
  to   { background-position: 2000px 2000px; }
}
</style>
