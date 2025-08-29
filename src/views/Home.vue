<script setup>
import Header from '../components/HeaderSection.vue'
import AboutSection from '../components/AboutSection.vue'
import ServicesSection from '../components/ServicesSection.vue'
import ReservasForm from '../components/ReservasSection.vue'
import Carrusel from '../components/CarruselSection.vue'
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
    <!-- Enlaces de navegación a la izquierda -->
    <div class="nav-links">
      <a href="#Carrusel">Galería</a>
      <a href="#ServicesSection">Servicios</a>
      <a href="#FAQ">FAQ</a>
    </div>

    <!-- Logo centrado -->
    <a href="#Home" class="logo-link">Witch Tattoo Studio</a>

    <!-- Botón de reservas a la derecha -->
    <a href="/reservas" class="reserva-btn-menu">¡Quiero tatuarme!</a>
  </nav>

  <!-- Header/Parallax -->
  <section id="Home" class="parallax-container">
    <video autoplay muted loop class="parallax-video" ref="video">
      <source src="/1.mp4" type="video/mp4" />
    </video>

    <div class="overlay">
      <Header />

      <!-- Botón de reserva dentro del hero -->
      <div class="header-btn-container">
        <a href="/reservas" target="_blank" rel="noopener noreferrer" class="reserva-btn">
          ¡Quiero tatuarme!
        </a>
      </div>
    </div>
  </section>

 <section id="AboutSection">
    <AboutSection />
  </section>

  <section id="Carrusel">
    <Carrusel />
  </section>

  <section id="ServicesSection">
    <ServicesSection />
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

/* Menú principal */
.main-nav {
  position: sticky;
  top: 0;
  width: 100%;
  background: #fff;
  z-index: 100;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 1rem 2rem;
  box-shadow: 0 2px 8px rgba(0,0,0,0.04);
}

/* Enlaces de navegación a la izquierda */
.nav-links {
  display: flex;
  gap: 2rem;
  flex: 0;
}
.nav-links a {
  color: #222;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.2s;
}
.nav-links a:hover {
  color: #e291ec;
}

/* Logo centrado */
.logo-link {
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  font-weight: bold;
  color: #222;
  text-decoration: none;
  font-size: 1.2rem;
  z-index: 1;
}
.logo-link:hover {
  color: #e291ec;
}

/* Botón del menú a la derecha */
.reserva-btn-menu {
  flex: 0;
  padding: 0.6rem 1.8rem;
  background: linear-gradient(45deg, #2f023a, #e291ec);
  color: #fff;
  font-weight: bold;
  border-radius: 12px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 0 10px rgba(206, 78, 245, 0.6);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.reserva-btn-menu:hover {
  transform: scale(1.05);
  box-shadow: 0 0 20px rgba(206, 78, 245, 0.8);
}

/* Parallax del video */
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
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

/* Contenedor del botón en el hero */
.header-btn-container {
  margin-top: 2rem;
  z-index: 2;
}

/* Botón de reserva dentro del hero */
.reserva-btn {
  display: inline-block;
  padding: 1rem 2.5rem;
  font-size: 1.3rem;
  font-weight: bold;
  color: #fff;
  background: linear-gradient(45deg, #2f023a, #e291ec);
  border-radius: 12px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 1px;
  box-shadow: 0 0 15px rgba(206, 78, 245, 0.6);
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
  background: rgba(255, 255, 255, 0.2);
  transform: rotate(45deg);
  transition: all 0.5s ease;
}

.reserva-btn:hover {
  transform: scale(1.1) rotate(-2deg);
  box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
}

.reserva-btn:hover::before {
  top: -10%;
  left: -10%;
}

/* Responsive */
@media (max-width: 900px) {
  .nav-links {
    gap: 1rem;
  }
  .reserva-btn-menu {
    padding: 0.5rem 1.5rem;
    font-size: 0.9rem;
  }
}

@media (max-width: 700px) {
  .main-nav {
    flex-direction: column;
    gap: 0.5rem;
    align-items: center;
  }
  .nav-links {
    justify-content: center;
    flex-wrap: wrap;
  }
  .reserva-btn-menu {
    margin-top: 0.5rem;
    text-align: center;
  }
  .logo-link {
    position: relative;
    left: 0;
    transform: none;
  }
}
</style>
