<script setup>
import Header from '../components/Header.vue'
import AboutSection from '../components/AboutSection.vue'
import ServicesSection from '../components/ServicesSection.vue'
import ReservasForm from '../components/ReservasForm.vue'
import Carrusel from '../components/Carrusel.vue' 
import FooterSection from '../components/FooterSection.vue'
import { onMounted, onUnmounted, ref } from 'vue'

const video = ref(null)

function handleScroll() {
  const scrollY = window.scrollY
  if (video.value) {
    video.value.style.transform = `translateY(${scrollY * 0.3}px)`
  }
}

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<template>
  <!-- Menú fijo -->
  <nav class="main-nav">
    <a href="#Home">Inicio</a>
    <a href="#Carrusel">Galería</a>
    <a href="#ServicesSection">Servicios</a>
    <a href="#ReservasForm">Reservas</a>
    <a href="#FAQ">FAQ</a>
    </nav>

  <!-- Header/Parallax -->
  <section id="Home" class="parallax-container">
    <video autoplay muted loop class="parallax-video" ref="video">
      <source src="/1.mp4" type="video/mp4" />
    </video>
    <div class="overlay">
      <Header />
      <section class="home">
        <h1>Bienvenid@ a Witch Tattoo</h1>
        <p>Explora nuestros trabajos, reserva tu cita y contáctanos fácilmente.</p>
        <div class="actions">
          <a href="#ReservasForm" class="btn">Reservar cita</a>
        </div>
      </section>
    </div>
  </section>

  <section id="Carrusel">
    <Carrusel />
  </section>

  <section id="ServicesSection">
    <ServicesSection />
  </section>

  <section id="AboutSection">
    <AboutSection />
  </section>

  <section id="ReservasForm">
    <ReservasForm />
  </section>

  <section id="FAQ">
    <h2>Preguntas Frecuentes</h2>
    <router-link to="/faq">Ver FAQ completas</router-link>
  </section>

  <FooterSection />
</template>

<style scoped>
html {
  scroll-behavior: smooth;
}

.main-nav {
  position: sticky;
  top: 0;
  width: 100%;
  background: #fff;
  z-index: 100;
  display: flex;
  justify-content: center;
  gap: 2rem;
  padding: 1rem 0;
  box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}

.main-nav a {
  color: #222;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.2s;
}
.main-nav a:hover {
  color: #b48a78;
}

.parallax-container {
  position: relative;
  height: 100vh;
  overflow: hidden;
}

.parallax-video {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 120%;
  object-fit: cover;
  z-index: 0;
  transition: transform 0.1s ease-out;
}

.overlay {
  position: relative;
  z-index: 1;
  background: rgba(0, 0, 0, 0.4);
  color: white;
  padding: 2rem 1rem;
  text-align: center;
  min-height: 100vh;
}

.home {
  max-width: 600px;
  margin: 0 auto;
}

.btn {
  display: inline-block;
  margin: 1rem;
  padding: 0.75rem 1.5rem;
  background: #222;
  color: #fff;
  border-radius: 4px;
  text-decoration: none;
}

/* Responsive */
@media (max-width: 700px) {
  .main-nav {
    flex-wrap: wrap;
    gap: 1rem;
    font-size: 0.95rem;
  }
  .home {
    padding: 0 0.5rem;
  }
}
</style>
