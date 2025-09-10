<script setup>
import Header from '../components/HeaderSection.vue'
import AboutSection from '../components/AboutSection.vue'
import ServicesSection from '../components/ServicesSection.vue'
import ReservasForm from '../components/ReservasSection.vue'
import Carrusel from '../components/CarruselSection.vue'
import FooterSection from '../components/FooterSection.vue'
import FAQSection from '../components/FAQSection.vue' 
import { ref } from 'vue'
const menuOpen = ref(false)
function toggleMenu() {
  menuOpen.value = !menuOpen.value
}
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

        <!-- Botón hamburguesa solo visible en móvil/tablet -->
        <button class="hamburger" @click="toggleMenu" aria-label="Abrir menú" aria-expanded="menuOpen">
          <span :class="{ open: menuOpen }"></span>
          <span :class="{ open: menuOpen }"></span>
          <span :class="{ open: menuOpen }"></span>
        </button>

        <!-- Enlaces del menú hamburguesa -->
        <div class="nav-links" :class="{ open: menuOpen }">
          <router-link :to="{ path: '/', hash: '#Carrusel' }" @click="menuOpen = false">Galería</router-link>
          <router-link :to="{ path: '/', hash: '#ServicesSection' }" @click="menuOpen = false">Servicios</router-link>
          <router-link :to="{ path: '/', hash: '#FAQ' }" @click="menuOpen = false">FAQ</router-link>
        </div>

        <!-- Iconos sociales -->
        <div class="social-icons">
          <a href="https://www.instagram.com/witch_tatto/" target="_blank" rel="noopener noreferrer" class="social-icon">
            <img src="/Logos/instagram.svg" alt="Instagram">
          </a>
          <a href="https://wa.me/34633852858" target="_blank" rel="noopener noreferrer" class="social-icon">
            <img src="/Logos/whatsapp.svg" alt="WhatsApp">
          </a>
        </div>

        <!-- Botón de reservas -->
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
  color: #FF2E2E;
  text-decoration: none;
  font-size: 1.2rem;
  text-shadow: 1px 1px 0 #000000;
}

.logo-link:hover {
  color: #ffffff;
}

.nav-links {
  display: flex;
  gap: 2rem;
  align-items: center;
}

.nav-links a {
  color: #F5F5F5;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.2s, text-shadow 0.2s;
}

.nav-links a:hover {
  color: #FF2E2E;
  text-shadow: 1px 1px 0 #000;
}

/* Iconos sociales */
.social-icons {
  display: flex;
  gap: 1rem;
  align-items: center;
}

.social-icon {
  display: inline-flex;
  position: relative;
  width: 28px;
  height: 28px;
  border-radius: 50%;
  overflow: visible;
  transition: transform 0.3s ease;
}

.social-icon img {
  width: 100%;
  height: 100%;
  display: block;
  z-index: 2;
  position: relative;
}

/*Solo iconos del menú fijo en blanco*/

.main-nav .social-icon img {
  filter: brightness(0) invert(1);
  transition: filter 0.3s ease;
}

.main-nav .social-icon img:hover {
  filter: brightness(0) invert(1) drop-shadow(0 0 4px rgba(255,255,255,0.8));
}

/* Círculo rojo al pasar el ratón */
.social-icon::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: rgba(255,46,46,0.3);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  transition: width 0.3s ease, height 0.3s ease;
  z-index: 1;
}

.social-icon:hover::before {
  width: 60px;
  height: 60px;
}

.social-icon:hover {
  transform: scale(1.1);
}

.reserva-btn-menu {
  padding: 0.6rem 1.8rem;
  background: linear-gradient(45deg, #490368, #dac0f5);
  color: #F5F5F5;
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
  color: #FF2E2E;
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
  background: #2E1A47;
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

/* =======================
   Responsive NAV
======================= */
@media (max-width: 900px) {
  .nav-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
  }

  .logo-link {
    flex: 1 1 auto;
  }

  .hamburger {
    order: 2;
  }

  .reserva-btn-menu {
    order: 3;
    flex: 1 1 100%; /* ocupa fila entera */
    text-align: center;
    margin-top: 0.5rem;
  }
}

/* =======================
   Responsive HERO/HEADER
======================= */
.header-container {
  position: relative;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  min-height: 100vh;   /* ocupa toda la pantalla */
  text-align: center;
  padding: 2rem;
  overflow: hidden;
}

.header-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;   /* que no se deforme */
  z-index: -1;         /* detrás del texto */
}

/* Títulos y texto encima del vídeo */
.header-title {
  font-size: clamp(2rem, 8vw, 5rem);
  font-weight: bold;
  color: #fff;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
  margin-bottom: 1rem;
}

.header-text {
  font-size: clamp(1rem, 4vw, 2rem);
  color: #eee;
  text-shadow: 1px 1px 4px rgba(0,0,0,0.5);
  max-width: 800px;
  margin: 0 auto;
  padding: 0 1rem;
}

/* Ajustes extra en pantallas pequeñas */
@media (max-width: 700px) {
  .header-title {
    letter-spacing: 2px;
  }
  .header-container {
    padding: 1rem 0.5rem;
  }
}

@media (max-width: 500px) {
  .header-container {
    padding: 0.5rem 0.2rem;
  }
}

/* Hamburguesa oculta en escritorio */
.hamburger {
  display: none;
  flex-direction: column;
  gap: 4px;
  background: none;
  border: none;
  cursor: pointer;
  z-index: 1001;
}
.hamburger span {
  display: block;
  width: 28px;
  height: 3px;
  background: #fff;
  border-radius: 2px;
  transition: all 0.3s;
}
.hamburger span.open:nth-child(1) { transform: rotate(45deg) translate(5px, 5px); }
.hamburger span.open:nth-child(2) { opacity: 0; }
.hamburger span.open:nth-child(3) { transform: rotate(-45deg) translate(6px, -6px); }

/* Responsive: mostrar hamburguesa y menú desplegable en móvil/tablet */
@media (max-width: 900px) {
  .hamburger {
    display: flex;
  }
  .nav-links {
    position: absolute;
    top: 60px;
    left: 0;
    right: 0;
    background: #fff;
    flex-direction: column;
    align-items: flex-start;
    gap: 1.2rem;
    padding: 1.2rem 2rem 1.5rem 2rem;
    display: none;
    z-index: 1000;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    border-radius: 0 0 18px 18px;
  }
  .nav-links.open {
    display: flex;
  }
  .nav-links a,
  .nav-links .router-link-active {
    color: #2E1A47 !important;
    font-size: 1.15rem;
    font-weight: 600;
    text-shadow: none;
    padding: 0.2rem 0;
  }
  .reserva-btn-menu {
    margin-top: 1.2rem;
    width: 100%;
    text-align: center;
    background: linear-gradient(45deg, #490368, #dac0f5);
    color: #fff !important;
    border-radius: 8px;
    padding: 0.8rem 0;
    font-weight: bold;
    text-decoration: none;
    border: none;
    display: block;
    font-size: 1.1rem;
    box-shadow: 0 0 10px rgba(218, 192, 245, 0.3);
    letter-spacing: 1px;
  }
  @media (max-width: 900px) {
  .reserva-btn-menu {
    font-size: 0.9rem;
    padding: 0.5rem 0.8rem;
    width: auto;         /* se ajusta al contenido */
    text-align: center;
  }
}
}

/* En escritorio, menú horizontal normal */
@media (min-width: 901px) {
  .nav-links {
    display: flex !important;
    position: static;
    flex-direction: row;
    gap: 2rem;
    background: none;
    box-shadow: none;
    padding: 0;
    align-items: center;
  }
  .nav-links a {
    color: #F5F5F5;
  }
  .reserva-btn-menu {
    margin-left: 1.5rem;
    background: linear-gradient(45deg, #490368, #dac0f5);
    color: #fff;
    border-radius: 12px;
    padding: 0.6rem 1.8rem;
    font-weight: bold;
    text-decoration: none;
    border: none;
    display: inline-block;
    font-size: 1rem;
    letter-spacing: 1px;
  }
}
</style>
