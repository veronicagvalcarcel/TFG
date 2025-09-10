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
        <button class="hamburger" @click="toggleMenu" aria-label="Abrir menú" aria-expanded="menuOpen">
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
    <main class="proteccion_datos-container">
      <h1 class="proteccion_datos-title">Protección de Datos</h1>

      <p>
  En <strong>Witch Tattoo Studio</strong> la privacidad de los datos personales de nuestros clientes y usuarios es prioritaria. <strong>Sara Castro Vicente</strong> se compromete a proteger la información personal conforme a la normativa vigente.
</p>

<p>
  <strong>Recopilación y uso:</strong> Solo recopilamos los datos necesarios para ofrecer nuestros servicios, incluyendo información de contacto y detalles del proyecto. Esta información se emplea exclusivamente para cumplir con los servicios solicitados y mejorar la experiencia del usuario.
</p>

<p>
  <strong>Seguridad:</strong> Aplicamos medidas técnicas y organizativas estrictas, como cifrado de datos y sistemas de control para evitar accesos no autorizados, alteraciones o pérdidas. Las prácticas de seguridad se actualizan constantemente para cumplir con los estándares del sector.
</p>

<p>
  <strong>Compartición de datos:</strong> No se venden ni se ceden datos a terceros sin autorización, salvo requerimiento legal o cuando sea necesario para prestar nuestros servicios, garantizando siempre confidencialidad y protección de la información.
</p>

<p>
  <strong>Derechos de los usuarios:</strong> Los usuarios pueden ejercer sus derechos de acceso, rectificación, cancelación u oposición sobre sus datos personales, contactando a <strong>Sara Castro Vicente</strong> mediante los canales disponibles. Se gestionarán estas solicitudes con diligencia y conforme a la ley.
</p>

<p>
  <strong>Actualizaciones:</strong> Esta política puede modificarse para reflejar cambios legales o mejoras en nuestras prácticas. Los cambios se comunicarán oportunamente a través del sitio web para mantener la transparencia y la información al usuario.
</p>

    </main>

    <!-- Footer -->
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
.bg-container {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  background: url('/Carrusel/Fondo_reservas/reservas.webp') no-repeat center center fixed;
  background-size: cover;
  overflow-x: hidden;
}

/* Contenedor principal */
.proteccion_datos-container {
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

.proteccion_datos-title {
  font-size: 2rem;
  color: #b22222;
  text-align: center;
  margin-bottom: 1rem;
}

.proteccion_datos-container p {
  font-size: 1.1rem;
  line-height: 1.6;
  color: #000;
}

.proteccion_datos-container p strong {
  color: #FF2E2E;
}

/* Estilos para el botón hamburguesa y el menú */
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

.nav-links {
  display: flex;
  gap: 1rem;
}

.nav-links.open {
  display: block;
}

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
  .main-nav {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 200;
  }
  .nav-container {
    position: relative;
  }
  /* Para evitar solapamiento con el contenido */
  .bg-container,
  .reservas-page {
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

.nav-container {
  display: flex;
  align-items: center;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0.5rem 2rem;
  position: relative;
}

/* Para móvil/tablet: hamburguesa a la derecha */
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
    margin-left: auto;
    order: 2;
  }
  .nav-links {
    order: 3;
  }
  .social-icons {
    order: 4;
  }
}
</style>
