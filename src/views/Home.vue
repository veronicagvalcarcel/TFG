<script setup>
import Header from '../components/HeaderSection.vue'
import AboutSection from '../components/AboutSection.vue'
import ServicesSection from '../components/ServicesSection.vue'
import ReservasForm from '../components/ReservasSection.vue'
import Carrusel from '../components/CarruselSection.vue'
import FooterSection from '../components/FooterSection.vue'
</script>

<template>
  <div class="bg-container">
    <!-- Capas de humo -->
    <!-- <div class="smoke smoke1"></div> -->
    <!-- <div class="smoke smoke2"></div> -->
    <div class="smoke smoke3"></div>
    <!-- <div class="smoke smoke4"></div> -->

    <!-- Menú fijo -->
    <nav class="main-nav">
      <div class="nav-container">
        <a href="#Home" class="logo-link">Witch Tattoo Studio</a>

        <div class="nav-links">
          <a href="#AboutSection">Sobre nosotros</a>
          <a href="#Carrusel">Galería</a>
          <a href="#ServicesSection">Servicios</a>
          <a href="#FAQ">FAQ</a>
        </div>

        <a href="/reservas" class="reserva-btn-menu">¡Quiero tatuarme!</a>
      </div>
    </nav>

    <!-- Hero con video -->
    <section id="Home" class="hero-container">
      <video autoplay muted loop class="hero-video">
        <source src="/1.mp4" type="video/mp4" />
      </video>

      <div class="overlay">
        <Header />
      </div>
    </section>

    <!-- Secciones -->
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
      <h2>Preguntas Frecuentes</h2>
      <router-link to="/faq">Ver FAQ completas</router-link>
    </section>

    <FooterSection />
  </div>
</template>

<style>
html {
  scroll-behavior: smooth;
}

/* Menú principal */
.main-nav {
  position: sticky;
  top: 0;
  width: 100%;
  background: #2E1A47;
  z-index: 100;
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
  color: #FF2E2E;
  text-decoration: none;
  font-size: 1.2rem;
  text-shadow: 1px 1px 0 #F5F5F5;
}

.logo-link:hover { color: #F5F5F5; }

.nav-links { display: flex; gap: 2rem; }

.nav-links a {
  color: #F5F5F5;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.2s;
}

.nav-links a:hover { color: #FF2E2E; }

.reserva-btn-menu {
  padding: 0.6rem 1.8rem;
  background: linear-gradient(45deg, #FF2E2E, #6A4A8A);
  color: #F5F5F5;
  font-weight: bold;
  border-radius: 12px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 0 10px rgba(255,46,46,0.6);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.reserva-btn-menu:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(106,74,138,0.8);
}

/* Hero */
.hero-container {
  position: relative;
  width: 100%;
  height: 100vh; /* ocupa toda la altura del hero */
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
  background: rgba(0,0,0,0.4);
  display: flex;
  justify-content: center;
  align-items: center;
}

.header-container {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.reserva-btn {
  display: inline-block;
  padding: 1rem 2.5rem;
  font-size: 1.3rem;
  font-weight: bold;
  color: #F5F5F5;
  background: linear-gradient(45deg, #FF2E2E, #6A4A8A);
  border-radius: 12px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 0 15px rgba(255,46,46,0.6);
  position: relative;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.reserva-btn::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: rgba(255,255,255,0.2);
  transform: rotate(45deg);
  transition: all 0.5s ease;
}

.reserva-btn:hover {
  transform: scale(1.1) rotate(-2deg);
  box-shadow: 0 0 25px rgba(255,46,46,0.8);
}

.reserva-btn:hover::before {
  top: -10%;
  left: -10%;
}

/* Capas de humo */
.bg-container {
  position: relative;
  min-height: 100vh;
  background: #2E1A47;
  overflow-x: hidden;
}

.smoke {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-repeat: repeat;
  opacity: 0.15;
  filter: blur(4px);
  z-index: 1;
}

/* .smoke1 { background-image: url("/Texturas/humo1.webp"); animation: moveSmoke 200s linear infinite; opacity:0.15; } */
/* .smoke2 { background-image: url("/Texturas/humo2.webp"); animation: moveSmoke 250s linear infinite reverse; opacity:0.12; } */
.smoke3 { background-image: url("/Texturas/humo3.webp"); animation: moveSmoke 220s linear infinite; opacity:0.1; }
/* .smoke4 { background-image: url("/Texturas/humo4.webp"); animation: moveSmoke 300s linear infinite reverse; opacity:0.08; } */

@keyframes moveSmoke {
  from { background-position: 0 0; }
  to   { background-position: 2000px 2000px; }
}

/* Secciones sobre el humo */
.section-bg { position: relative; z-index: 2; }
</style>
