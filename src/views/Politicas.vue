<template>
  <div class="bg-container">
    <!-- Menú fijo -->
    <nav class="main-nav" role="navigation" aria-label="Menú principal">
      <div class="nav-container">
        <!-- Logo -->
        <router-link :to="{ path: '/', hash: '#Home' }" class="logo-link">
          Witch Tattoo Studio
        </router-link>

        <!-- Botón hamburguesa solo visible en móvil/tablet -->
        <button class="hamburger" @click="toggleMenu" aria-label="Abrir menú" :aria-expanded="menuOpen">
          <span :class="{ open: menuOpen }"></span>
          <span :class="{ open: menuOpen }"></span>
          <span :class="{ open: menuOpen }"></span>
        </button>

        <!-- Enlaces del menú -->
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
      </div>
    </nav>

    <!-- Contenido principal -->
    <main class="politicas-container">
      <h1 class="politicas-title">Políticas de Privacidad</h1>

      <p>
        <strong>Responsable:</strong> Sara Castro Vicente. Los datos personales se gestionan conforme al Reglamento General de Protección de Datos de la UE y la Ley Orgánica de Protección de Datos y Garantía de Derechos Digitales.
      </p>

      <p>
        <strong>Finalidad:</strong> Mantener la relación con los usuarios, enviar información sobre productos y servicios, realizar estudios de mercado y atender solicitudes recibidas por los canales de contacto.
      </p>

      <p>
        <strong>Base legal:</strong> Consentimiento del usuario para comunicaciones y boletines; interés legítimo para análisis de mercado y gestión de solicitudes.
      </p>

      <p>
        <strong>Duración:</strong> Los datos se conservan solo el tiempo necesario y se eliminarán o anonimizarán cuando ya no sean necesarios.
      </p>

      <p>
        <strong>Cesión de datos:</strong> Solo se comparten con proveedores que colaboran con Sara Castro Vicente mediante acuerdos legales y de confidencialidad.
      </p>

      <p>
        <strong>Derechos del usuario:</strong> Acceder, rectificar, suprimir, limitar u oponerse al tratamiento de los datos y solicitar su portabilidad. También puede retirar el consentimiento en cualquier momento o presentar reclamación ante la autoridad de control (<a href="https://www.aepd.es" target="_blank" rel="noopener noreferrer">www.aepd.es</a>).
      </p>

      <p>
        <strong>Medidas de seguridad:</strong> Se aplican todas las medidas técnicas y organizativas necesarias para proteger los datos y garantizar los derechos de los usuarios.
      </p>
    </main>

    <FooterSection />
  </div>
</template>

<script setup>
import { ref } from 'vue'
import FooterSection from '../components/FooterSection.vue'
const menuOpen = ref(false)
function toggleMenu() {
  menuOpen.value = !menuOpen.value
}
</script>

<style scoped>
/* Contenedor principal con imagen y footer siempre abajo */
.bg-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: url('/Carrusel/Fondo_reservas/reservas.webp') no-repeat center center fixed;
  background-size: cover;
  overflow-x: hidden;
}

/* Contenido principal */
.politicas-container {
  flex: 1;
  position: relative;
  z-index: 1;
  max-width: 1000px;
  margin: 8rem auto 2rem auto;
  padding: 2.5rem;
  background: rgba(255, 255, 255, 0.92);
  border-radius: 1.5rem;
  box-shadow: 0 8px 25px rgba(0,0,0,0.4);
  font-family: 'Almendra', serif;
  color: #222;
  text-align: left;
}

.politicas-title {
  font-size: 2rem;
  color: #b22222;
  text-align: center;
  margin-bottom: 1rem;
}

.politicas-container p {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #000;
}

.politicas-container p strong {
  color: #FF2E2E;
}

.politicas-container p a {
  color: #b22222; /* rojo */
  font-weight: bold;
  text-decoration: underline;
}

/* NAV styles */
.main-nav {
  width: 100%;
  background: #2E1A47; /* color sólido fijo */
  box-shadow: 0 2px 8px rgba(0,0,0,0.4);
  position: fixed;
  top: 0;
  left: 0;
  z-index: 200;
}
.nav-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0.5rem 2rem;
  position: relative;
}
.logo-link {
  font-family: 'Pirata', serif;
  color: #FF2E2E;
  text-decoration: none;
  letter-spacing: 2px;
  font-weight: bold;
  text-shadow: 1px 1px 0 #000000;
  z-index: 1002;
}



.logo-link:hover {
  color: #ffffff;
}

.hamburger {
  display: none;
  flex-direction: column;
  gap: 4px;
  background: none;
  border: none;
  cursor: pointer;
  z-index: 1001;
  margin-left: auto;
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
.nav-links {
  display: flex;
  gap: 1rem;
}
.nav-links.open {
  display: block;
}
.social-icons {
  display: flex;
  gap: 1rem;
  align-items: center;
}

/* Responsive NAV */
@media (max-width: 900px) {
  .nav-container {
    padding: 0.5rem 1rem;
    position: relative;
  }
  .logo-link {
    flex: 1 1 auto;
  }
  .hamburger {
    display: flex;
    position: absolute;
    right: 1rem;
    top: 50%;
    transform: translateY(-50%);
  }
  .nav-links {
    position: absolute;
    top: 60px;
    left: 0;
    right: 0;
    background: #2E1A47;
    flex-direction: column;
    align-items: flex-start;
    gap: 1.2rem;
    padding: 1.2rem 2rem 1.5rem 2rem;
    display: none;
    z-index: 1000;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    border-radius: 0 0 18px 18px;
  }
  .nav-links.open {
    display: flex;
  }
  .nav-links a,
  .nav-links .router-link-active {
    color: #fff !important;
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
  .bg-container {
    padding-top: 70px !important;
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
